<!DOCTYPE html>
<html>
<head>
  <title></title><link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
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
              if(data==2)
              {
                window.location.href="regi_start.php";

              }
              else if(data==3)
              {
                window.location.href="voting.php";

              }
              else if(data==4)
              {
                window.location.href="ct/conut1.php";

              }
              else
              {
                
              }
             }
            });   

      },100);
    });


</script>
</head>
<body>
<div class="super_container">
<?php
  $con=mysqli_connect("localhost","root","","votting_project")or die("Database Error....!");
  $rdate=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM registation_date"));
  $vdte=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM generate_date"));

   $originalDate = $rdate[1];
   $regi_date = date("d-m-Y", strtotime($originalDate));

   $originalDate2 = $vdte[1];
   $v_date = date("d-m-Y", strtotime($originalDate2));

   $originalDate3 = $vdte[2];
   $r_date = date("d-m-Y", strtotime($originalDate3));


   $result_time2 = date("h:i:a", strtotime($vdte[3]));

  ?>
  <!-- Header -->

  <?php
include('header2.php');
  ?>

  
  <div class="courses">
    <div class="container">
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
    
      <div class="featured_container">
            <div class="row">
              <div class="col-lg-6 featured_col">
                <div class="featured_content">
                  <div class="featured_header d-flex flex-row align-items-center justify-content-start">
                    <div class="featured_tag"><a href="#">Notice</a></div>
                  </div>
                  <div class="featured_title">
                    <h3><a href="#">1) Only final/last year students can be Register.</a></h3>
                    <h3><a href="#">2)Registration will be starts from <?php echo $regi_date?>.</a></h3>
                    <h3><a href="#">2)Registration ends & Voting starts from <?php echo $v_date?>.</a></h3>
                    <h3><a href="#">2)Voting ends & Result will be declared on <?php echo $r_date?>. at <b style="color: green"><?php echo $result_time2?></b></a></h3>
                    <h3></h3>
                  </div>
                  
                  
                </div>
              </div>
              <div class="col-lg-6 featured_col">
                <!-- Background image artist https://unsplash.com/@jtylernix -->
                <div class="featured_background" style="background-image:url(images/featured.jpg)"></div>
              </div>
            </div>
          </div>
    </div>
  </div>

  


  <!-- Join -->

  

  <!-- Footer -->
<?php
include('footer.php');
?>
</body><script src="js/jquery-3.2.1.min.js"></script>
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
</html>

