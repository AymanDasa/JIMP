## Split a comma-delimited string into an array 
```
$myString = "9,admin@example.com,8";
$myArray = explode(',', $myString);
print_r($myArray);


Array
(
    [0] => 9
    [1] => admin@example.com
    [2] => 8
)
```