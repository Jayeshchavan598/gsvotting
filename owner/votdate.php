<!DOCTYPE html>
<html lang="en">
<?php

session_start();
if(isset($_SESSION['owner']))
{

}
else
{
    echo'
    <script>
     window.location.href="../index.php";
    </script>
    ';
}
?>

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

<body>
  <?php
  $con=mysqli_connect("localhost","root","","votting_project")or die("Database Error....!");

  ?>
    <?php
$re=mysqli_query($con,"SELECT * FROM generate_date");
  $row=mysqli_fetch_row($re);
  $num=mysqli_num_rows($re);
  $originalDate1 = $row[1];
  $originalDate2 = $row[2];

$newDate1 = date("d-M-Y", strtotime($originalDate1));
$newDate2 = date("d-M-Y", strtotime($originalDate2));

?>

  <!-- ======= Header ======= -->
  <?php
  include('nav.php');
  ?><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php
  include('sidebar.php');
  ?>
 <!-- End #main -->

 
 
 <main id="main" class="main">

   

    <section class="section">
      <br>
      <br>
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">

          <div class="card"  style="border-top: 3px solid blue">
            <div class="card-body">
              <h5 class="card-title">Votting Date</h5>

              <!-- General Form Elements -->
              <form method="POST" action="votdate.php">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Start Date</label>
                  <div class="col-sm-10">
                    <input type="Date" name="date1" class="form-control" value="<?php echo $row[1]?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">End Date</label>
                  <div class="col-sm-10">
                    <input type="Date" name="date2" class="form-control" value="<?php echo $row[2]?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Result Time</label>
                  <div class="col-sm-10">
                    <input type="time" name="tm2" class="form-control" value="<?php echo $row[3]?>">
                  </div>
                </div>
                

                <div class="row mb-3">
                  <div class="col-sm-4"></div>
                  <div class="col-sm-6">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    <button type="submit" class="btn btn-danger">Cancel</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

        
      <div class="row">
        <div class="col-sm-4"></div>
          <div class="col-sm-3">
            <b>Start Votting:</b>
              <b  style="color: orange"><?php echo $newDate1?></b>
          </div>

          <div class="col-sm-3">
            <b>End Votting:</b>
              <b  style="color: orange"><?php echo $newDate2?></b>
          </div>
        
     
        
      </div>
    </section>

  </main>
<br>
<br>


  <?php
  include('footer.php');
  ?>

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

</html>
<?php
if(isset($_POST['submit']))
{
$date1=$_POST['date1'];
$date2=$_POST['date2'];
echo $time2=$_POST['tm2'];
// echo$time2 = date("h:i:s",$tm2);
if($num>0)
{
  if(mysqli_query($con,"UPDATE generate_date SET  Voting_date='".$date1."',End_votting='".$date2."',result_time='".$time2."' WHERE ID=1"))
  {
  echo "
  <script>
  alert('Done');
  window.location.href='votdate.php'
  </script>
  ";
  }
  else
  {
    echo "
  <script>
  alert('Not Update');
  window.location.href='votdate.php'
  </script>
  ";
  }
}
else
{
  if(mysqli_query($con,"INSERT INTO generate_date VALUES('','".$date1."','".$date2."','".$time2."')"))
  {
  echo "
  <script>
  alert('Data Added');
  window.location.href='votdate.php'
  </script>
  ";
  }
  else
  {
    echo "
  <script>
  alert('Try Again');
  window.location.href='votdate.php'
  </script>
  ";
  }
}

}
?>
