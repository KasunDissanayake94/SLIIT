<div class="modal fade" id="loginModal">
         <div class="modal-dialog">
         <div class="modal-content">   
    <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 style="color: black;font-style: italic;font-weight:500"><img  src="images/logo.png" style="width: 120px;height: 50px;"> Signin</h3>
          </div>
          <div class="modal-body">
            <form method="post" action="php/login_check.php" name="login_form">
            
             <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        
      </div>
              
              
              <p><button type="submit" class="btn btn-primary" onClick="loginCheck();">Sign in</button>
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
	  