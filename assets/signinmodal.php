<div class="modal fade" id="loginModal">
         <div class="modal-dialog">
         <div class="modal-content">   
    <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 style="color: black;font-style: italic;font-weight:500"><img  src="images/logo.png" id="loginicon"> Login</h3>
          </div>
          <div class="modal-body">
            <form method="post" action="php/user.php" name="login_form">
             <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="UserName" name="euname" id="username" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
             <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback" name="passwd" required></span>
      </div>
              
              
              <p><button type="submit" class="btn btn-primary">Sign in</button>
                <a  style="color: black;font-style: italic;font-weight:500" href="#">Forgot Password?</a>
              </p>
            </form>
          </div>
          <div class="modal-footer">
                <button type="button" class="btn btn-warning pull-right" data-dismiss="modal">Close</button>
                
              </div>
			 </div>
	  </div>
	  </div>