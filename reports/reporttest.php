@ -0,0 +1,30 @@
<?php
// Define the array with the given elements
$alpha = [
    "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
    "AA", "AB", "AC", "AD", "AE", "AF", "AG", "AH", "AI", "AJ", "AK", "AL", "AM", "AN", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AV", "AW", "AX", "AY", "AZ",
    "BA", "BB", "BC", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BK", "BL", "BM", "BN", "BO", "BP", "BQ", "BR", "BS", "BT", "BU", "BV", "BW", "BX", "BY", "BZ",
    "CA", "CB", "CC", "CD", "CE", "CF"
];

// Initialize the current position in the array
$currentPosition = 0;

function getNextAlpha() {
    global $alpha, $currentPosition;
    // Get the current element
    $element = $alpha[$currentPosition];
    // Increment the current position
    $currentPosition++;
    // Reset to the first element if the end is reached
    if ($currentPosition >= count($alpha)) {
        $currentPosition = 0;
    }
    echo  $element."<br>";
}

// Example usage:
for ($i =0 ; $i < 200 ;$i++){
 getNextAlpha();    }
 
?>