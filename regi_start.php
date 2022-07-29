

<!DOCTYPE html>
<html lang="en">
<head>
<title>GSVoting</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Elearn project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link href="plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
  <script type="text/javascript" src="jquery.min.js"></script>

<script type="text/javascript">
   $(document).ready(function(){
      setInterval(function(){
        var regi_date = $("#regi_date").val();
       
          $.ajax({
             type: "POST",
             url: 'dates_ajax.php',
             success: function(data)
             {
              if(data==3)
              {
                window.location.href="voting.php";

              }
              else
              {
                
              }
             }
            });   

      },100);
    });


</script>
<script type="text/javascript">

	function get_stu_data(stu_id)
	{
		$.ajax({
          data: "stu_id="+stu_id,
          type: "POST",
          url: "stu_info_ajax.php",

          success: function(data)
          {
              $("#sid").html(data);
              
          }
      });
	}

	function confirmation()
	{
		var a=confirm("Do you realy want to confirm registraition as GS candidate...!");
		if(a==true)
		{
			var sid2=document.getElementById('sid2').value;
			var goal=document.getElementById('goal').value;
			var pass=document.getElementById('pass').value;
			window.location.href="regi1.php?sid2="+sid2+"&goal="+goal+"&pass="+pass;
		}
		else
		{

		}
	}
</script>
</head>
<body>
	 <?php
  $con=mysqli_connect("localhost","root","","votting_project")or die("Database Error....!");

  ?>

<div class="super_container">

	<!-- Header -->

	<?php
include('header.php');
	?>

	
	<div class="courses">
		<div class="container">
			<div class="row">

			<!-- <div class="row">
				<div class="col-sm-5" style="border:3px solid orange;">
					<h4 style="color: orange" ></h4>
					<hr style="background-color: orange">
					<h4>1)Registation has only to do its own.</h4>
					<h4>4)Registation Will be end before one day of voting date.</h4>
					<h4>5)Once Student Registered He/She can not be Register Again.</h4>
				</div>
			</div> -->
				<div class="col-lg-4 grouped_col">
					<div class="grouped_title">*Notice:</div>
					<div class="accordions">

						<div class="accordion_container">
							<div class="accordion d-flex flex-row align-items-center "><div>Who can Register?</div></div>
							<div class="accordion_panel">
								<div>
									<h4>1)Only Third Year Students can be Register.</h4>
									<h4>2)If Students is in Engineering Department Then Only Final Year Students can be register.</h4>

								</div>
							</div>
						</div>

						<div class="accordion_container">
							<div class="accordion d-flex flex-row align-items-center"><div>Can you register for other student?</div></div>
							<div class="accordion_panel">
								<div>
									<h4>1)Registation has only to do its own.</h4>
									
								</div>
							</div>
						</div>

						<div class="accordion_container">
							<div class="accordion d-flex flex-row align-items-center"><div>End Date</div></div>
							<div class="accordion_panel">
								<div>
									<h4>1)Registation Will be end one day before voting date.</h4>
								</div>
							</div>
						</div>

						<div class="accordion_container">
							<div class="accordion d-flex flex-row align-items-center"><div>Other</div></div>
							<div class="accordion_panel">
								<div>
									<h4>1)Once Student Registered He/She can not be Register Again.</h4>
								</div>
							</div>
						</div>

					</div>

				</div>


				<div class="col-lg-8 grouped_col">
					<form>
					<div class="row">
							<div class="col-lg-6 featured_col">
								<div class="featured_content">
									
									<select class="form-control" onchange="get_stu_data(this.value)" name="sid">
										<option>Select Your Name</option>
										<?php
					                     $stu1=mysqli_query($con,"SELECT * FROM students WHERE Year='Third Year' || Year='Final Year'");
					                     while($stu=mysqli_fetch_row($stu1))
					                     {
					                     	if($stu[1]==1 && $stu[2]!='Final Year')
					                     	{

					                     	}
					                     	else
					                     	{
					                      echo "<option value='".$stu[0]."'>$stu[3]</option>";

					                     	}
					                     }
					                     ?>
									</select>
									<br>
									<input type="text" class="form-control" name="pass" id="pass" placeholder="Enter Password">
										<br>
									<div id="sid">
										<img src="icon.jpeg" style="height: 250px;width: 280px">
									</div>
								</div>
							</div>


							<div class="col-lg-6 featured_col">
								<!-- Background image artist https://unsplash.com/@jtylernix -->
								<div class="featured_background" style="background-image:url(images/featured.jpg)"></div>
							</div>
						</div>
					</form>
						<br>
						<marquee>
							
								<?php
								$not1=mysqli_query($con,"SELECT * FROM notice");
                     			while($not=mysqli_fetch_row($not1))
                     			{
                     				echo'<b style="color: red;font-size:20px">'.$not[1].', &nbsp</b>';
                     			}
								?>
						</marquee>
				</div>
			

		</div>
			
		</div>
	</div>

<?php
include('footer.php');
?>
	
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/video-js/video.min.js"></script>
<script src="plugins/video-js/Youtube.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
