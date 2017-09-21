<?php 
		require '../php/dbcon.php';

		output = "";
		$data = $_GET['data'];

		$query2 = "";

		if($data == "")
		{
			$query2 = "SELECT * FROM doctor"; 
		}
		else
		{
			$query2 = "SELECT * FROM doctor WHERE doc_Name LIKE '%data%'";
		}
		
		$result = mysqli_query($conn,$query2);

?>