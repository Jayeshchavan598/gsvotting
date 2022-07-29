

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
    <style type="text/css">

.ripple {
  width: 70px;
  height: 20px;
  animation: ripple 2s linear infinite;
}
@keyframes ripple {
  0% {
    box-shadow: 0 0 0 2rem rgba(155,155,155, 0.2),
                
  }
  100% {
    box-shadow: 0 0 0 2rem rgba(155,155,155, 0.2),
                0 0 0 2rem rgba(155,155,155, 0.2),
                0 0 0 2rem rgba(155,155,155, 0);
  }
}
  </style>


<script type="text/javascript">
   $(document).ready(function(){
      setInterval(function(){
        var regi_date = $("#regi_date").val();
       
          $.ajax({
             type: "POST",
             url: 'dates_ajax.php',
             success: function(data)
             {
              if(data==4)
              {
                window.location.href="ct/index.php";

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
    function add_cr(candidate)
    {
     var a=confirm("Do you want to vote for this candidate....?");
      if(a==true)
      {
        var passw=prompt("Enter Your password");
        if(passw=="")
        {
          alert("You must enter password for vote");
        }
        else
        {
        window.location.href="vote_add.php?cid="+candidate+"&passw="+passw;

        }
        // window.location.href="vote_add.php?cid="+candidate;

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
<div class="" style="height: 600px">

  <!-- Header -->

  <?php
include('header2.php');
  ?>

  
<div class="grouped_sections" style="background-image: url('images/voteback.jpg'); background-repeat: no-repeat;background-position: center;background-size: cover;height: auto">
    <div class="container-fluid" >
      <div class="row" style="margin-top: -60px">

        <div class="col-lg-6 grouped_col" style="background-color: #fff">
          <div class="grouped_title" style="color: blue">Candidates</div>
          <div class="news" >
            
            <!-- News Post -->
            <?php
            $sr1=mysqli_query($con,"SELECT * FROM registered_students ORDER BY vote_count DESC");
            while($sr=mysqli_fetch_row($sr1))
            {
              $sname=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM students WHERE ID='".$sr[1]."'"));
              $dep=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM department WHERE ID='".$sname[1]."'"));
              
              echo '
                    <form action="voting.php" method="POST">

                    <div class="row">
                     
                      <div class="col-sm-4">
                        <img src="student/'.$sname[7].'"  style="border-radius: 100px;height: 100px;width: 100px">
                      </div>

                      <div class="col-sm-4">
                           <div class="news_post_body">
                            <div class="news_post_title"><a href="#" style="color: #000;font-size: 24px;font-family: Agency FB" type="text" name="name">'. $sname[3].'</a> &nbsp;
                            </div>
                            <br>
                            <h4 style="color: red;">'.$dep[1].'</h4>

                            <div class="news_post_author" style="color: white" type="text" name="cname">'.$sr[2].'</div>

                          </div>
                      </div>

                      

                      <div class="col-sm-2">
                      <br>
                       <h3 style="text-shadow:1px 2px #FF00FF;animation-delay: 0s" class="ripple"> '.$sr[3].'</h3>
                      </div>

                      <div class="col-sm-2">
                       <img src="images/vote.png" style="height:80px;width:80px" type="submit" name="submit" onclick="add_cr('.$sr[1].')">
                      </div>   

                    </div>
                            <hr style="background-color: gray;width:auto">

                    </form>


                   
                ';
            }
           

            ?>

          </div>


        </div>
         <div class="col-lg-4 grouped_col">

        </div>

        <!-- <div class="col-lg-4 grouped_col">

          <img src="images/tf.jpg" class="img img-responsive">
        </div> -->
      </div>
    </div>
  </div>

  


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
