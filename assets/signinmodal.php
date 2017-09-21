<link href="css/loginstyle.css" rel='stylesheet' type='text/css' />

<div class="modal fade" id="loginModal" >
         <div class="modal-dialog">
         <div class="modal-content">   
    <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><img  src="images/logo.png" style="width: 220px;height: 75px;">
          </div>
          <div class="modal-body">
            <form method="post" action="php/login_check.php" name="login_form">
             <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="uname">
        
      </div>
             <div class="form-group has-feedback" >
        <input type="password" class="form-control" placeholder="Password" name="password">
        
      </div>
              
              
              <p><button type="submit" class="btn my-lg-button" onClick="loginCheck();">Sign in</button>
                <a href="#">Forgot Password?</a>
              </p>
            </form>
          </div>
			 </div>
	  </div>
	  </div>
	  