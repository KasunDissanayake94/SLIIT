<?php

$pw=$_POST['password'];
$uname=$_POST['uname'];
if($pw=='mediq'&& $uname=='nurse'){
	header('Location:../views/doctorPage');
}
?>