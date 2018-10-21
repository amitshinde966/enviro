<?php
session_start();
global $msg;
include_once('private/conn.php');
	if(isset($_POST['userlogin']))
	{
		$user_username = filter_var($_POST['user_username']);
		$user_password = filter_var(md5($_POST['user_password']));
		$user = $db->get_row("select * from user where user_username='$user_username' and user_password='$user_password'");
		if($user)
		{
			$_SESSION['user_id'] = $user->user_id;
			header("location:index.php");
		}
		else
		{
			$msg = "<div class='alert alert-danger'>Login failed/Incorrect Username or Password</div>";
		}
	}

?>
<html class="bg-black"><head>
        <meta charset="UTF-8">
        <title>User Login</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- bootstrap 3.0.2 -->
        <link href="admin/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <!-- font Awesome -->
        <link href="admin/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Theme style -->
        <link href="admin/css/AdminLTE.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    <style type="text/css"></style></head>
    <body class="bg-black">

	<div class="">





	</div>



        <div class="form-box" id="login-box">
            <div class="header">User Login</div>

			<form action="" method="post" id="loginform">
                <div class="body bg-gray">
				<?php
				if(isset($msg))
				{
				echo $msg;
				}
				?>
                    <div class="form-group">
                        <input type="text" name="user_username" id="user_username" class="form-control" placeholder="Username">
                        <span class="label label-danger" id="loginform_admin_username_errorloc"></span>
                    </div>
                    <div class="form-group">
                        <input type="password" name="user_password" id="user_password" class="form-control" placeholder="Password">
                        <span class="label label-danger" id="loginform_admin_password_errorloc"></span>
                    </div>
                </div>
                <div class="footer">
                    <button type="submit" name="userlogin" class="btn bg-olive btn-block">Sign me in</button>
                    <!--<p><a href="#">I forgot my password</a></p>
                    <a href="register.html" class="text-center">Register a new membership</a> -->
                </div>
								<div class="footer">
								<a href="signup.php">Signup</a>
							</div>
            </form>


        </div>


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="admin/js/bootstrap.min.js" type="text/javascript"></script>

		<script src="admin/js/gen_validatorv4.js" type="text/javascript"></script>
		<script src="admin/js/pwdwidget.js" type="text/javascript"></script>
		<script type="text/javascript">
		 var frmvalidator  = new Validator("loginform");
         //where myform is the name/id of your form
         frmvalidator.EnableOnPageErrorDisplay();
   		 frmvalidator.EnableMsgsTogether();
   		 frmvalidator.addValidation("user_username","req","Please Provide User Name.");
   	     frmvalidator.addValidation("user_password","req","Please Provide Password.");

		</script>

</body></html>
