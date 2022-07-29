<!-- 
Author URI: http://webthemez.com/  
-->
<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--[if lt IE 9]> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
<title>Ultra HTML5 Bootstrap Coming Soon Template</title>
<meta name="description" content="">
<meta name="author" content="WebThemez">
<!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!--[if lte IE 8]>
		<script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
	<![endif]-->
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link href="css/animate.css" rel="stylesheet" media="screen">
<link href="et-line-font/style.css" rel="stylesheet" />
<link rel="stylesheet" href="css/styles.css" />
<link href="font/css/font-awesome.min.css" rel="stylesheet">
  <script type="text/javascript" src="../jquery.min.js"></script>

<script type="text/javascript">
   $(document).ready(function(){
      setInterval(function(){
        var r_time = $("#r_time").val();
        var c_time = $("#c_time").val();
          $.ajax({
             type: "POST",
             url: 'result_ajax.php',
             success: function(data)
             {

             // alert(data);
             var cur=document.getElementById('c_time').value=data;
             	if(cur==r_time || cur>r_time)
             	{
             		window.location.href="../result.php";
             		
             	}
             }
            });   

      },200);
    });


</script>
</head>

<body> 
<!--/.header-->


<div id="#top"></div>
<?php
  $con=mysqli_connect("localhost","root","","votting_project")or die("Database Error....!");
?>
<section id="home">
  <div class="banner-container">
    <div class="container"> 
      <div class="heading text-center">
	   <div class="logo text-center">  </div>
        <h2 >Wait For Result....!</h2>  </div>
      <div class="countdown styled"></div>
	  <div class="col-sm-12 text-center copyrights"> Copyright 2018 | All Rights Reserved - Template by <a href="http://webThemez.com">WebThemez.com</a> </div>

    </div>
  </div>

    <div class="web-content">
  <section id="services">
	<?php
	 $ed=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM generate_date"));
   	 $result_time=$ed[3];
   $result_time2 = date("h:i:a", strtotime($result_time));


	echo "<br>";
   date_default_timezone_set('Asia/Kolkata');
	 $now_time=date('h:i:a');

   echo"<input type='hidden' id='r_time' value='".$result_time2."'>";
   echo"<input type='hidden' id='c_time' value='".$now_time."'>";

	?>
	<div class="container">
	    	
			
		<div class="services"> 
		<div class="skill-home-solid clearfix"> 

		<div class="row" style="margin-top: -100px">

			<img src="../images/Icon.jpeg" style="height: 600px" class="img img-responsive">
		</div>
		
		</div>
		</div> 
	 

	</div>
	</section> 
	

	<footer>
	<div class="container">
	<div class="social text-center"> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-flickr"></i></a> <a href="#"><i class="fa fa-github"></i></a> </div>
	<div class="clear"></div>
	<!--CLEAR FLOATS--> 
	<div class="text-center footerTxt">All Rights Reserved. <a href="https://webthemez.com/free-bootstrap-templates/" target="_blank">Free Template</a> by WebThemez.com</div>
	</div>
	</footer>
	<!--/.page-section-->
  </div>
</section>  

<!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]--> 
<script src="js/modernizr-latest.js"></script> 
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="js/jquery.nav.js" type="text/javascript"></script> 
<script src="js/waypoints.js"></script> 
<script src="js/Backstretch.js" type="text/javascript"></script> 
<script src="contact/jqBootstrapValidation.js"></script>
<script src="contact/contact_me.js"></script>
<script src="js/custom.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/jquery.countdown.js"></script>
</body>
</html>
