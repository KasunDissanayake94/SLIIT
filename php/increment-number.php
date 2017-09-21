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
$query = "UPDATE session SET counter={$currentNo} WHERE session_ID='{$sid}'";

$result = mysqli_query($conn,$query);
?>