<?php session_start();
		ob_start();
	 ?>
<!DOCTYPE html>
<html>
<head>
<title>Sigin</title>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Youth Fashion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!-- start menu -->
<script src="js/bootstrap.min.js"></script>
<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/responsiveslides.min.js"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
</head>
<body>



<!--header-->
<?php include 'header.php'; ?>
<!--//header-->


<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Account</li>
			</ol>
		</div>
</div>

<div class="account">
	<div class="container">
		<h2>Account</h2>
		<div class="account_grid">
			   <div class="col-md-6 login-right">
				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
				<?php 
					require 'connect.php';
					if($_SERVER['REQUEST_METHOD']=='POST')
					{
						$email = $_POST['email'];
						$pass  = $_POST['password'];
						$sql = "SELECT * from user where email='$email' and pass='$pass'";
						$query = mysqli_query($conn,$sql);
						$count = mysqli_num_rows($query);
						$data  = mysqli_fetch_assoc($query);
						if($count > 0 )
						{
							$_SESSION['id']=$data['id'];
							$_SESSION['email']=$data['email'];
							$_SESSION['pass']=$data['pass'];
							header("location: beg.php");
							exit;
						}}
                        elseif($_SERVER['REQUEST_METHOD']=='POST'){
                            
                        $email = $_POST['email'];
						$pass  = $_POST['password'];
						$sql = "SELECT * from admin where email='$email' and password='$pass'";
						$query = mysqli_query($conn,$sql);
						$count = mysqli_num_rows($query);
						$data  = mysqli_fetch_assoc($query);
						if($count > 0 )
						{
							$_SESSION['id']=$data['adminId'];
							$_SESSION['email']=$data['email'];
							$_SESSION['pass']=$data['password'];
							header("location: index.php");
							exit;
						}
                            
                            
                        }

						else 
						{
							echo 'Incorrect email or password' .mysqli_error($conn);
						}					
				 ?>
					<span>Email Address</span>
					<input type="text" name="email"> 
				
					<span>Password</span>
					<input type="password" name="password"> 
					<div class="word-in">
				  		<a class="forgot" href="#">Forgot Your Password?</a>
				 		 <input type="submit" value="Login">
				  	</div>
			    </form>
			   </div>	
			    <div class="col-md-6 login-left">
			  	 <h4>NEW CUSTOMERS</h4>
				 <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				 <a class="acount-btn" href="customer.php">Create an Account</a>
			   </div>
			   <div class="clearfix"> </div>
			 </div>
	</div>
</div>



<!--footer-->
<?php include 'footer.php'; ?>
<!--footer-->



</body>
</html>