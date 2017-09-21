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

    <link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
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
              <a href="#"><img src="../images/logo.png" style="width: 220px;height: 75px;" id="logo" title="doctor" /></a>
            </div>
            <!----start-top-nav---->
             <nav class="top-nav">
              <ul class="top-nav">
                <li><a href="../index.php"  id="signout">Sign Out</a></li>
                
              </ul>
              <a href="#" id="pull"><img src="../images/menu-icon.png" title="menu" /></a>
            </nav>
            <div class="clearfix"> </div>
          </div>
        </div>
      </div>
    <!----- //End-header---->

    <!-- Page Content -->
    <div class="container">
      <div class = "row" style="margin-top: 20px;">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Session ID</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th></th>
                </tr>
            </thead>
        <?php 
          $id = $_GET['id'];
          $query3 = "SELECT * FROM session WHERE doc_NIC = '$id'";
          $result3 = mysqli_query($conn,$query3);


          while($rows = mysqli_fetch_assoc($result3))
          {
            
        ?>       
              
          
           <tbody>
             <tr><?php echo "<a href='sessions.php?id=".$rows['session_ID']."'>";?>
             <td><?php echo $rows['session_ID']; ?></td>
             <td><?php echo $rows['session_Date']; ?></td>
             <td><?php echo $rows['session_Time']; ?></td>
             <td><center><?php echo "<a href='appointments.php?sid=".$rows['session_ID']."'>"; ?><button class="btn btn-success">PROCEED</button></a></center></td>
             </a>
             </tr>
           </tbody>


          

        <?php } ?>

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
  });
</script>