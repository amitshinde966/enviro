<?php
session_start();
global $msg;
include_once('private/conn.php');
	if(isset($_POST['usersignup']))
	{
    $user_fname = filter_var($_POST['user_fname']);
		$user_username = filter_var($_POST['user_username']);
		$user_password = filter_var(md5($_POST['user_password']));

    $insert_data = $db->query("INSERT INTO user VALUES('','$user_fname','$user_username','$user_password')");

    if($insert_data)
    {
      header("location:login.php");
    }
    else
    {
      $msg = "<div class='alert alert-danger'>Failed to signup!</div>";
    }
		/*$admin = $db->get_row("select * from admin where admin_username='$admin_username' and admin_password='$admin_password' and admin_status='1'");
		if($admin)
		{
			$_SESSION['admin_id'] = $admin->admin_id;
			header("location:index.php");
		}
		else
		{
			$msg = "<div class='alert alert-danger'>Login failed/Incorrect Username or Password</div>";
		}*/
	}

?>
<html class="bg-black"><head>
        <meta charset="UTF-8">
        <title>User Signup</title>
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
            <div class="header">User Signup</div>

			<form action="" method="post" id="loginform">
                <div class="body bg-gray">
				<?php
				if(isset($msg))
				{
				echo $msg;
				}
				?>
                    <div class="form-group">
                        <input type="text" name="user_fname" id="user_fname" class="form-control" placeholder="Full Name">
                        <span class="label label-danger" id="loginform_admin_username_errorloc"></span>
                    </div>
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
                    <button type="submit" name="usersignup" class="btn bg-olive btn-block">Sign up</button>
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
