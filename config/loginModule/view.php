<?php
function auth(){
//create the database connection
include_once 'config/authModule/real-config.php';

//calls the login functions
include_once 'config/loginModule/login-func.php';


include 'config/recordsModule/focus.php';
session_start(); // Our custom secure way of starting a PHP session.
  ?>
<body class="hold-transition login-page">
<div class="login-box" >
  <div class="login-logo">
    <a href="../../index2.html"><b>School</b> Student Portal</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Registration No" name="username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="p">
        <span class="glyphicon glyphicon-lock form-control-feedback" ></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type ="submit" class="btn btn-primary btn-block btn-flat" name="login">Sign In</buttona>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <!-- /.social-auth-links -->

    <a href="#">I forgot my password</a><br>
  </div>
	<?php
	  include_once 'config/authModule/sh-config.php';
	  session_start(); // Our custom secure way of starting a PHP session.
	  if (isset($_POST['username'], $_POST['p'])) {
		  $username = $_POST['username'];
		  $password = $_POST['p']; // The hashed password.
	   
		  if (login_function($username, $password, $mysqli) == true) {
			  // Login success 
			  header('Location: ./pages/dash.php?token=ZGFzaGJvYXJk');
		  } else {
			  // Login failed 
			  $msg = msg_error("Login Failed", 'Wrong Password or Username. Please Try Again');
			  echo  $msg;
		  }
	  }
	?>
  </div>

</div>
    <?php
}