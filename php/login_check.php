<?php

$pw=$_POST['password'];
if($pw=='mediq'){
	header('Location:../views/doctorPage');
}
?>