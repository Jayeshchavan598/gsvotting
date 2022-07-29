

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
</head>
<body>
	 <?php
  $con=mysqli_connect("localhost","root","","votting_project")or die("Database Error....!");

  ?>
	<div class="grouped_sections" style="background-image: url('images/w2.gif'); background-repeat: no-repeat;background-position: center;background-size: cover;">
		<div class="container-fluid" >
			<div class="row">
				<div class="col-lg-2 grouped_col" ></div>

				<div class="col-lg-4 grouped_col" >

					<div class="row" style="margin-top: -50px">
						<img style="height: 350px" src="images/winner.png" class="img img-responsive" height="400px">
					</div>
					<hr>
					<div class="row" style="margin-top: -50px">
						<img style="height: 350px" src="images/w2.png" class="img img-responsive" height="400px">
					</div>

				</div>


				<div class="col-lg-6 grouped_col">


					<?php
					$srn=1;
           		 	$sr1=mysqli_query($con,"SELECT * FROM registered_students ORDER BY vote_count DESC");
					
					while($sr=mysqli_fetch_row($sr1))
					{
						if($srn<3)
						{
							$sname=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM students WHERE ID='".$sr[1]."'"));
              			$dep=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM department WHERE ID='".$sname[1]."'"));
						echo'
						<div class="row" style="margin-top: 20px">
						
							<div class="news_post d-flex flex-row align-items-start justify-content-start">
								<div><div class=""><img src="student/'.$sname[7].'"  style="height: 250px;width: 250px"></div></div>
								<div class="news_post_body">
									<div class="news_post_title"><a href="#" style="color: yellow;font-size: 24px;font-family: Agency FB">'.$sname[3].'</a> &nbsp;
										<b style="color: #fff;font-size: 22px;font-family: Algerian"> [&nbsp;'.$sr[3].'&nbsp;Votes]</b>
									</div>
									<br>
									<div class="news_post_date">'.$dep[1].'</div>

									<div class="news_post_author"> <a href="#">'.$sr[2].'</a></div>
									<hr style="background-color: orange">

								</div>

							</div>
						</div>
						<hr style="background-color: orange">';
							}
						
					$srn++;
					}
					
					?>




				</div>

			</div>
		</div>
	</div>

	

<div class="super_container">

	<!-- Header -->

	<?php
include('header.php');
	?>

	
	

	


	<!-- Join -->

	

	<!-- Footer -->
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