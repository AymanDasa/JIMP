<?php     
$startTimeStamp = '2024-03-25 22:18'; // Example start timestamp
$endTimeStamp = '2024-03-25 22:45';   // Example end timestamp

$start = strtotime($startTimeStamp); // Convert start timestamp to Unix timestamp
$end = strtotime($endTimeStamp);     // Convert end timestamp to Unix timestamp

$numberSeconds = abs($end - $start); // Absolute difference in seconds
$numberDays = ceil($numberSeconds / (60 * 60 * 24));
echo $numberDays;
?>