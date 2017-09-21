<?php 
		require '../php/dbcon.php';

		$output = "";
		$data = $_GET['searchData'];

		$query2 = "";

		if($data == "")
		{
			$query2 = "SELECT * FROM doctor"; 
		}
		else
		{
			$query2 = "SELECT * FROM doctor WHERE doc_Name LIKE '%".$data."%'";
		}
		
		$result2 = mysqli_query($conn,$query2);

		if(mysqli_num_rows($result2)>0)
		{
			while($rows = mysqli_fetch_assoc($result2))
	        {
	               
	              
	          

	       echo" <div class=\"col-md-3 col-sm-6 \"  style=\"margin-bottom: 20px;\">
          <div class=\"card h-100\">
             
             <a href='sessions.php?id=".$rows['doc_NIC']."'>
          
            <img class=\"card-img-top\" src=".$rows['imageLink']. "></a>
            <div class=\"card-body\">
              <h4 class=\"card-title\">
                
                 <a href='sessions.php?id=".$rows['doc_NIC']."'>"
                
              . $rows['doc_Name']."</a>
              </h4>
          
              <p class=\"card-text\">".$rows['doc_Spec']."</p>
            </div>
          </div>
        </div>";
			} 
		}
		else
		{
			echo "No doctors found";
		}
?>