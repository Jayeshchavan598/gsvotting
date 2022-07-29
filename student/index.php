<?php
session_start();
if(isset($_SESSION['stu']))
{

}
else
{
    echo'
    <script>
     window.location.href="../login2.php";
    </script>
    ';
}
$con=mysqli_connect("localhost","root","","votting_project")or die("Database Error....!");

$eli1=mysqli_query($con,"SELECT * FROM registered_students WHERE SID='".$_SESSION['stu']."'");

$vote1=mysqli_query($con,"SELECT * FROM generate_date");
$vote=mysqli_fetch_row($vote1);
$cdate=date("Y-m-d");
// if($cdate>=$vote[1] && $cdate<=$vote[2])
// {
//  echo'
//     <script>
//      window.location.href="../voting.php";
//     </script>
//     ';
// }


// $profile=mysqli_fetch_row($profile1);
if($eli=mysqli_num_rows($eli1)>0)
{
  echo'<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GS Votting Project</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->';?>
  <script type="text/javascript">
    function cr(val)
    {
     var a=confirm("Do you realy want to cancel registraition...!");
      if(a==true)
      {
        window.location.href="regi_cancel.php?sid2="+val;

      }
      else
      {

      }
    }
  </script>
<?php echo'</head>

<body>';
  

  $con=mysqli_connect("localhost","root","","votting_project")or die("Database Error....!");

$profile1=mysqli_query($con,"SELECT * FROM students WHERE ID='".$_SESSION['stu']."'");
$profile=mysqli_fetch_row($profile1);

  
  
  include("nav.php");
 

echo'<br>
<br>
<br>
<br>
<br>
  <div class="container">

    <div class="pagetitle">
      <h1>Profile</h1>
      
    </div><!-- End Page Title -->

   
    <section class="section contact">

      <div class="row gy-4">

        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="../owner/'.$profile[7].'" style="height: 150px;width: 150px" alt="Profile" class="rounded-circle">
              <h2>'.$profile[3].'</h2>
              
            </div>
          </div>

        </div>

        <div class="col-xl-8">
          <div class="row">
            <h2 style="color:red;text-align:center" >Cancel Registraition</h2>
          </div>
          <br>
          <br>
          <div class="row">
            <div class="col-xl-5"></div>
            <div class="col-xl-4">
              <button class="btn btn-warning pull-right" onclick="cr('.$_SESSION["stu"].')">Cancel Registraition</button>
            </div>

          </div>
        </div>

       

      </div>

    </section>

  </div>
  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>';
}
else
{
    echo'<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GS Votting Project</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>';
  

  $con=mysqli_connect("localhost","root","","votting_project")or die("Database Error....!");

$profile1=mysqli_query($con,"SELECT * FROM students WHERE ID='".$_SESSION['stu']."'");
$profile=mysqli_fetch_row($profile1);

  
  
  include("nav.php");
 

echo'<br>
<br>
<br>
<br>
<br>
  <div class="container-fluid">

    <div class="pagetitle">
      <h1>Profile</h1>
      
    </div><!-- End Page Title -->

   
    <section class="section contact">

      <div class="row gy-4">

        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="../owner/'.$profile[7].'" style="height: 150px;width: 150px" alt="Profile" class="rounded-circle">
              <h2>'.$profile[3].'</h2>
              
            </div>
          </div>

        </div>

        <div class="col-xl-8">

         <img src="../tu.jpg">
        </div>

       

      </div>

    </section>

  </div>
  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>';
}


?>