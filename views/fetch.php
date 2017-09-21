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
	               
	              
	          

	        
	        echo "<div class='card h-100'>";
	        echo "<a href='#'><img class='card-img-top' src=".$rows['imageLink']." alt=''></a>
	            <div class='card-body'>
	              <h4 class='card-title'>
	                <a href='#'>".$rows['doc_Name']."</a>
	              </h4>";

	              /*<!--<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>-->
	              <p class="card-text"><?php echo $rows['doc_Spec']; ?></p>*/
	            echo "</div>
	          </div>";
			} 
		}
		else
		{
			echo "Data Not Found";
		}
?>