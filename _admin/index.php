<?php
	session_start();
	?>
<!DOCTYPE html>
<html>
  <head>
    <title>Admin Login</title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="assets/styles.css" rel="stylesheet" media="screen">
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
  <body id="login">
    <div class="container">

      <form class="form-signin" action="index.php" method="post">
        <h2 class="form-signin-heading">Admin You Have To Login Here</h2>
        <input type="text" class="input-block-level" placeholder="Email address" name="email">
        <input type="password" class="input-block-level" placeholder="Password" name="pass">
        
        <input type="submit" name="submit" value="Submit">
      </form>
	  <?php
	
	 //include("../includes/db.php");
	if(isset($_POST['submit'])){

		$email = $_POST['email'];
		$pass = $_POST['pass'];
		

		$conn = mysqli_connect("localhost", "root","","qwilo1");
		$sql = "SELECT * FROM admin WHERE email='$email' and password='$pass'";
		$result = mysqli_query($conn, $sql);
			//print_r($result);
		$num=mysqli_num_rows($result);
		  $_SESSION['email'] = $email;
		if($num)
		{
			//echo $_SESSION['email'];
			header("Location: home.php");
			
		}
		else
		{
			echo 'error';
			//header('index.php');
		}

	}

?>

    </div> <!-- /container -->
    <script src="vendors/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>