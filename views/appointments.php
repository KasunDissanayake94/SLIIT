<?php
  require '../php/dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<script src="../fonts/font-awesome.min.css"></script>
    <title>MediQ-nurse</title>

    <script src="../fonts/font-awesome.min.css" rel='stylesheet' type='text/css'></script>

    <link href="../css/searchBar.css" rel='stylesheet' type='text/css' />
    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!--<link href="../css/3-col-portfolio.css" rel="stylesheet">-->

    <link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery.min.js"></script>
     <!-- Custom Theme files -->
    <link href="../css/style.css" rel='stylesheet' type='text/css' />
       <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    </script>
     <!---- start-smoth-scrolling---->
    <script type="text/javascript" src="../js/move-top.js"></script>
    <script type="text/javascript" src="../js/easing.js"></script>
    <script type="text/javascript">
      jQuery(document).ready(function($) {
        $(".scroll").click(function(event){   
          event.preventDefault();
          $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
      });
    </script>
     <!---- start-smoth-scrolling---->
    <!----webfonts--->
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!---//webfonts--->
    <!----start-top-nav-script---->
    <script>
      $(function() {
        var pull    = $('#pull');
          menu    = $('nav ul');
          menuHeight  = menu.height();
        $(pull).on('click', function(e) {
          e.preventDefault();
          menu.slideToggle();
        });
        $(window).resize(function(){
              var w = $(window).width();
              if(w > 320 && menu.is(':hidden')) {
                menu.removeAttr('style');
              }
          });
      });
    </script>
    <!----//End-top-nav-script---->

    


  </head>

  <body>

    <!----- start-header---->
      <div id="home" class="header">
          <div class="top-header">
            <div class="container">
            <div class="logo">
              <a href="#"><img src="../images/logo.png" id="logo" title="doctor" /></a>
            </div>
            <!----start-top-nav---->
             <nav class="top-nav">
              <ul class="top-nav">
                <li><a href="../index.php"  id="signout">Signout</a></li>
                
              </ul>
              <a href="#" id="pull"><img src="../images/menu-icon.png" title="menu" /></a>
            </nav>
            <div class="clearfix"> </div>
          </div>
        </div>
      </div>
    <!----- //End-header---->

    <!----- start-header---->
      <div>
          <div class="top-header">
            <div class="container">
              <div class="row">
               <div class="col-md-6">
               <button class="btn btn-primary pull-right" onClick="nextPatient();" style="margin-left: 10px;margin-top: 30px;">Next Number</button>
               <button class="btn btn-warning pull-right" style="margin-top: 30px; width: 140px" id="pausebtn">Pause Session</button></div>
                <div class="col-md-4">
                  
                  <div style="border: 2px solid red;outline: green thick;height: 100px; width: 150px;"><center>Current Number</center>
                  <center><label id="count" style="font-size: 40px;">1</label></center></div>
                
                </div>
              </div>
            
            <div class="clearfix"> </div>
          </div>
        </div>
      </div>
    <!----- //End-header---->

    <!-- Page Content -->
    <div class="container">
      <div class = "row" id="tablecontainer" style="margin-top: 20px;">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Appointment Number</th>
                    <th>Reference Number</th>
                    <th>Patient Name</th>
                    <th>Contact Number</th>
                </tr>
            </thead>
            <tbody>
        <?php 
          $sid = $_GET['sid'];
          $query4 = "SELECT * FROM appointment WHERE session_ID = '$sid'";
          $result4 = mysqli_query($conn,$query4);
          $pname = "";
          while($rows = mysqli_fetch_assoc($result4))
          {
            $phone = $rows['patient_Phone'];
            $query5 = "SELECT * FROM patient WHERE patient_Phone = '$phone'";
            $result5 = mysqli_query($conn,$query5);

            while($rows2 = mysqli_fetch_assoc($result5))
            {
                $pname = $rows2['patient_Name'];
            }
        ?>       
              
          
           
             <tr><td><?php echo $rows['app_No']; ?></td>
             <td><?php echo $rows['ref_No'];?></td>
             <td><?php echo $pname; ?></td>
             <td><?php echo $rows['patient_Phone']; ?></td></tr>
           


          

        <?php } ?>
</tbody>
          </table>
      </div>
      <!-- /.row -->

      
    </div>
    <!-- /.container -->

    <!-- Footer -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>


<script>
	document.getElementById('tablecontainer').getElementsByTagName('tbody')[0].getElementsByTagName('tr')[0].className +="backgreen";
  $(document).ready(function()
  {
    $('#search').keyup(function()
      {
        var txt = $(this).val();
        var txt2 = "";

            $.ajax(
              {
                url:"fetch.php",
                method:"get",
                data:{searchData:txt},
                dataType:"text",
                success:function(data)
                {
                  $('#livesearch').html(data);
                }
              });
      });

      var dataArray =[];
      var sid = "<?php echo $_GET['sid']; ?>";
      dataArray.push(sid);
      dataArray.push(1);
      var jsonString = JSON.stringify(dataArray);
      $.ajax({
          url: "../php/increment-number.php",
          method: "post",
          data:{data:jsonString},
          cache: false,
      });

  });
	function nextPatient(){
		
		
		var currentno=document.getElementById('count').textContent;
		document.getElementById('tablecontainer').getElementsByTagName('tbody')[0].getElementsByTagName('tr')[currentno-1].className -="backgreen";
		currentno++;
		
		
		document.getElementById('tablecontainer').getElementsByTagName('tbody')[0].getElementsByTagName('tr')[currentno-1].className +="backgreen";
    /*var num = currentno.toString();
    var loc = "increment.php?id=";
    var loc2 = "<?php echo $_GET['sid']; ?>&no=";
    loc2 = loc2.concat(num);
    loc = loc.concat(loc2);
		window.location=loc;*/

		var n = currentno.toString();
		$('#count').html(n);

        var dataArray =[];
        var sid = "<?php echo $_GET['sid']; ?>";
        dataArray.push(sid);
        dataArray.push(currentno);
        var jsonString = JSON.stringify(dataArray);
        $.ajax({
            url: "../php/increment-number.php",
            method: "post",
            data:{data:jsonString},
            cache: false,
        });
	}
	 
	$("#pausebtn").click(function(){
		
		if(document.getElementById('pausebtn').innerHTML=="Pause Session"){
		document.getElementById('pausebtn').innerHTML="Resume session";
		$(this).removeClass('btn-warning');	
		$(this).addClass('btn-success');
		}
		else{
		document.getElementById('pausebtn').innerHTML="Pause Session";
			$(this).removeClass('btn-success');	
			$(this).addClass('btn-warning');
		}
	});
</script>