<?php include("include/head.php"); ?>

  <body class="be-splash-screen">
    <div class="be-wrapper be-fixed-sidebar be-login">
      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="splash-container">
            <div class="card card-border-color card-border-color-primary">
              <div class="card-header"><img class="logo-img" src="assets/img/elsol_logo.png" alt="logo"><span class="splash-description">Please enter your user information.</span></div>
              <div class="card-body">
                <form>
                  <div class="form-group">
                    <input class="form-control" id="username" type="text" placeholder="Username" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="password" type="password" placeholder="Password">
                  </div>
                  <div class="form-group row login-tools">
                    <div class="col-6 login-remember">
                      <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                      </label>
                    </div>
                    <div class="col-6 login-forgot-password"><a href="pages-forgot-password.html">Forgot Password?</a></div>
                  </div>
                  <div class="form-group login-submit"><a class="btn btn-primary btn-xl" href="#" data-dismiss="modal">Sign me in</a></div>
                </form>
              </div>
            </div>
            <div class="splash-footer"><span>Don't have an account? <a href="#">Sign Up</a></span></div>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/lib/jquery/jquery.min.js"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script>
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      });
      
    </script>
  </body>
</html>