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
  $res=mysqli_query($con,"SELECT * FROM notice WHERE ID='".$_GET['id']."'");
  $row=mysqli_fetch_row($res);
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
      <br>
      <br>
      <br>
      <br>
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">

          <div class="card"  style="border-top: 3px solid blue">
            <div class="card-body">
              <h5 class="card-title">Add Notice</h5>

              <!-- General Form Elements -->
              <form method="POST" action="update_notice.php">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <input type="text" name="notice" class="form-control" required="" value="<?php echo $row[1]?>">
                  </div>
                </div>
                
                <input type="hidden" name="id" class="form-control" value="<?php echo $row[0]?>">

                <div class="row mb-3">
                  <div class="col-sm-2"></div>
                  <div class="col-sm-6">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    <button type="submit" class="btn btn-danger">Cancel</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

        
      </div>
    </section>

  </main>
<br>
<br>
<br>
<br>
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
$notice=$_POST['notice'];
$id=$_POST['id'];
if(mysqli_query($con,"UPDATE notice SET Notice='".$notice."' WHERE ID='".$id."'"))
{
echo "
<script>
alert('Data Updated');
window.location.href='view_notice.php'
</script>
";
}
else
{
  echo "
<script>
alert('Try Again');
window.location.href='view_notice.php'
</script>
";
}
}
?>