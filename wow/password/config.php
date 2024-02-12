<?php

if(!isset($page_level)){
	$page_level=1;
	$path="../";} 
		
class db {

    protected $connection; // Holds the database connection
    protected $query;
    protected $show_errors = TRUE;
    protected $query_closed = TRUE;
	public $query_count = 0; 
	/**
     * Constructor for the Database class.
     * Initializes the database connection.
     */
	public function __construct($dbhost = 'localhost', $dbuser = 'root', $dbpass = '', $dbname = 'data', $charset = 'utf8') {
		$this->connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
		if ($this->connection->connect_error) {
			// Check if connection was successful
			$this->error('Failed to connect to MySQL - ' . $this->connection->connect_error);
		}
		//echo '<br>1. connect to MySQL <br>';
		$this->connection->set_charset($charset);
		
	} 



    public function query($query) {
	// Close previous query if not closed
        if (!$this->query_closed) {
            $this->query->close();}
	try {
	   	// Prepare the SQL statement
	   	$this->query = $this->connection->prepare($query); 
		if ($this->query ) {
            if (func_num_args() > 1) { 
			// Extract types and values for binding
                $x = func_get_args();
                $args = array_slice($x, 1);
				$types = '';
                $args_ref = array();
                foreach ($args as $k => &$arg) {
					// Handle arrays of parameters
					if (is_array($args[$k])) {
						foreach ($args[$k] as $j => &$a) {
							$types .= $this->_gettype($args[$k][$j]);
							$args_ref[] = &$a;
						}
					} else {
	                	$types .= $this->_gettype($args[$k]);
	                    $args_ref[] = &$arg;
					}
                }
			 array_unshift($args_ref, $types);
				// Bind parameters to the prepared statement
                call_user_func_array(array($this->query, 'bind_param'), $args_ref);
            }
		  	// Execute the prepared statement
            	$this->query->execute();  
			// Set query_closed to FALSE to indicate an open query
            	$this->query_closed = FALSE;
			$this->query_count++;
        } else {
			// Error handling if the prepared statement fails
            	$this->error('Unable to prepare MySQL statement (check your syntax) - ' . $this->connection->error);
        } 
	}
	catch (mysqli_sql_exception $e) { 
		
		// $this->error('<p style="font-family:  Verdana , sans-serif;">'.$query.'<p style="font-family:  Verdana , sans-serif;"><B>Unable to process MySQL query : </B> ' . $e->getMessage());
		$this->error('<p style="font-family:  Verdana , sans-serif;"> <p style="font-family:  Verdana , sans-serif;"><B>Unable to process MySQL query : </B> ' . $e->getMessage());
	}
		return $this; // Return the Database instance for method chaining
    } 
    	/*
		* Fetches all rows from the result set and applies a callback function to each row if provided. 
		* @param callable|null $callback (Optional) A callback function to apply to each row.
		*                               The callback should take a row as an argument and may return a value.
		*                               If the callback returns 'break', the loop is terminated.
		* @return array An array containing all rows from the result set.
		 /////// ALLL GOOOD
	*/
	public function fetchAll($callback = null) {
		$params = array();
		$row = array(); 
		// Obtain metadata about the result set
		$meta = $this->query->result_metadata(); 
		// Prepare parameters for binding result columns
		while ($field = $meta->fetch_field()) {
			$params[] = &$row[$field->name];
			} 
		// Bind result columns
		call_user_func_array(array($this->query, 'bind_result'), $params); 
		$result = array(); 
		// Fetch rows and apply callback if provided
		while ($this->query->fetch()) {
			$r = array(); 
			// Copy values from bound variables to a new array
			foreach ($row as $key => $val) {
				$r[$key] = $val;
				} 
			// Apply callback if provided
			if ($callback != null && is_callable($callback)) {
				$value = call_user_func($callback, $r); 
				// If callback returns 'break', terminate the loop
				if ($value == 'break') {	break;}
				} else {
					// Otherwise, add the row to the result array
					$result[] = $r;
				}
			} 
		// Close the result set and mark it as closed
		$this->query->close();
		$this->query_closed = TRUE; 
		return $result;
	}
 
	/**
	 * Fetches a single row from the result set and returns it as an associative array.
	 *
	 * @return array|null An associative array representing a single row.
	 *                    Returns null if there are no more rows in the result set.
	 */
	public function fetchArray() {
		$params = array();
		$row = array(); 
		// Obtain metadata about the result set
		$meta = $this->query->result_metadata(); 
		// Prepare parameters for binding result columns
		while ($field = $meta->fetch_field()) {
		    	$params[] = &$row[$field->name];
		} 
		// Bind result columns
		call_user_func_array(array($this->query, 'bind_result'), $params); 
		$result = array(); 
		// Fetch a single row and store it in the result array
		if ($this->query->fetch()) {
			foreach ($row as $key => $val) {
				$result[$key] = $val;
			}
			} else {
			// No more rows in the result set, return null
			$result = null;
			}
	 
		// Close the result set and mark it as closed
		$this->query->close();
		$this->query_closed = TRUE; 
		return $result;
	}

	public function prepare($sql) {
		return $this->connection->prepare($sql);
	 }
	 
	/**
	 * Retrieves all values from a specific column in a given table.
	 *
	 * @param string $tableName The name of the table.
	 * @param string $columnName The name of the column.
	 * @return array An array containing all values from the specified column.
	 */
	public function getArrayValues($tableName, $columnName) {
		// Construct the SQL query to select the specified column from the table
		$query = "SELECT $columnName FROM $tableName"; 
		// Execute the query and fetch all rows
		$result = $this->query($query)->fetchAll(); 
		// Extract the values from the specified column
		$values = array_column($result, $columnName); 
		return $values;
	} 
	
	public function close() {
		return $this->connection->close();
	}
	
	
	
	public function getRowCount() {
		// Check if the query is closed
		if ($this->query_closed) {
			throw new Exception("Query is closed");
		}

		// Fetch the number of rows
		$this->query->store_result();
		$rowCount = $this->query->num_rows;

		// Close the result set
		$this->query->close();
		$this->query_closed = TRUE;

		return $rowCount;
	}




    public function numRows() {
		$this->query->store_result();
		return $this->query->num_rows;
	}

	public function affectedRows() {
		return $this->query->affected_rows;
	}

	public function LastRows() { 
		$count = $this->query->affected_rows; 
		return $count;
	}

    public function lastInsertID() {
    	return $this->connection->insert_id;
    }

    public function error($error) {
        if ($this->show_errors) {
            exit($error);
        }
    }

	private function _gettype($var) {
	    if (is_string($var)) return 's';
	    if (is_float($var)) return 'd';
	    if (is_int($var)) return 'i';
	    return 'b';
	}

	

}
$dbop = new db;  

?>