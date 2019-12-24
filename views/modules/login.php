<body class="bg-primary">
     
 <div class="unix-login">
      <div class="container">

        <div class="row">

          <div class="col-lg-6 col-lg-offset-3">
              <div class="login-content">
                    <div class="login-box">

                          <div class="login-logo">

                             <li class="text-center">
                                <img src="views/assets/images/logo.png" alt="" width="80">

                                <h4>Velvet POS</h4>

                            </li>


                          </div>

                            <div class="login-form">

                              <p class="login-box-msg">Sign in to start your session</p>

                              <form method="post">

                                <div class="form-group has-feedback">

                                  <input type="text" class="form-control" placeholder="User" name="loginUser" required>

                                  <span class="glyphicon glyphicon-user form-control-feedback"></span>

                                </div>

                                <div class="form-group has-feedback">

                                  <input type="password" class="form-control" placeholder="Password" name="loginPass" required>

                                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                                </div>

                                <div class="row">

                                  <div class="col-xs-4">

                                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>

                                  </div>
                                 
                                </div>

                                <?php

                                  $login = new ControllerUsers();
                                  $login -> ctrUserLogin();

                                ?>

                              </form>

                            </div>

                          </div>

                    </div>

                </div>

            </div>

        </div> 

      </div>
</body>