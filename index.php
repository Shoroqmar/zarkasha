<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Zarkasha</title>
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
<link href='//fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!-- start menu -->
<script src="js/bootstrap.min.js"></script>
<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/responsiveslides.min.js"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: false,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
  <script type="text/javascript">
 $(document).ready(function()
 {
 $("#insert").click(function(){
 var title=$("#title").val();
 var duration=$("#duration").val();
 var price=$("#price").val();
 var dataString="title="+title+"&duration="+duration+"&price="+price+"&insert=";
 if($.trim(title).length>0 & $.trim(duration).length>0 & $.trim(price).length>0)
 {
 $.ajax({
 type: "POST",
 url:"http://localhost/phonegap/database/insert.php",
 data: dataString,
 crossDomain: true,
 cache: false,
 beforeSend: function(){ $("#insert").val('Connecting...');},
 success: function(data){
 if(data=="success")
 {
 alert("inserted");
 $("#insert").val('submit');
 }
 else if(data=="error")
 {
 alert("error");
 }
 }
 });
 }return false;
 });
 });
 </script>
  <!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
    </script>
    <script>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- //animation-effect -->
<!--    animation css-->
</head>
<body >


<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
				<div class="col-sm-4 logo animated wow fadeInLeft" data-wow-delay=".5s">

					<h1><a href="index.html">Zarkasha</a></h1>	
				</div>
		
			</div>
			
			<div class="col-sm-2 search animated wow fadeInRight" data-wow-delay=".5s">		
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
<!--//header-->
			<div class="clearfix"> </div>


<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
			</ol>
		</div>
</div>


<!--banner-->
 
    <a href="account.php">
    	
		<div class="container">
			
					<div class="row">
						<div class="col-md-8 col-sm-8 col-lg-8 col-md-offset-2 text-center">
							
                            <img class="blink-image img-responsive" src="images/logo33.png">
                            
                            
							<h1 class="to-animate" style="font-size:40px; color:#ffbd4a ; font-family:Herculanum;"> Click to continue  <br> </h1>
							
						</div>
				
			</div>
		</div>
    </a>
    

<!--
<div class="banner">
	<div class="matter-banner">
	 	<div class="slider">
	    	<div class="callbacks_container">
	      		<ul class="rslides" id="slider">
	        		<li>
	          			<A HREF="outfit.html"></A>
                        <img src="images/3422.jpg" alt="" src= "outfit.html" class="img-responsive" >
						<div class="tes animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
							
 
                                
                           <img src="images/logo.png" alt="" src= "outfit.html" class="img-responsive" >
							
						</div>
                        <div class = "animated wow fadeInUp animated"  data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp; position: absolute; right: 10%; top: 50%; text-align: right ;"> <h2 style="color:white; font-size:150%; ">Welcome to Zarkasha ...  </h2></div>

                         
                    
	       			 </li>
                   
	      		</ul>
	 	 	</div>
		</div>
	</div>
	<div class="clearfix"> </div>
</div>
-->
<!--//banner-->
<!--content-->

			


<!--footer-->
<?php include 'footer.php'; ?>
<!--footer-->


</body>
</html>