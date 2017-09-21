<?php require_once 'dbcon.php' ?>

<?php
/**
 * Created by PhpStorm.
 * User: Wasura Dananjith
 * Date: 22-Sep-17
 * Time: 1:02 AM
 */

$data = json_decode(stripslashes($_POST['data']));
$sid = $data[0];
$currentNo = $data[1];
$current = date("h:i:sa");

$date = date_create();
$newTime = date_timestamp_get($date);

$query1= "SELECT current_Times,avg_Time FROM session WHERE session_ID='{$sid}'";
$result1 = mysqli_query($conn,$query1);
$row = mysqli_fetch_assoc($result1);

$oldTime=$row['current_Times'];
if ($oldTime == 0){
    $avgTime = 0;
}
else{
    $oldAvgTime = $row['avg_Time'];
    $avgTime=(($oldAvgTime+($newTime-$oldTime))/$currentNo)/60;
}



$query = "UPDATE session SET counter='$currentNo',current_Times='$newTime',avg_Time='$avgTime' WHERE session_ID='{$sid}'";
$result = mysqli_query($conn,$query);

?>