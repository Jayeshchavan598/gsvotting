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

    <div class="pagetitle">
      <h1>Student Data</h1>

    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body table-responsive">
              

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead style="background-color: #99ccff;color: #fff">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Department Name</th>
                    <th scope="col">Year</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Address</th>
                    <th scope="col">Image</th>
                    
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                    
                  </tr>
                </thead>
<?php
$sr=1;
  $re=mysqli_query($con,"SELECT * FROM students");
    while($row=mysqli_fetch_row($re))
{
  $dep1=mysqli_query($con,"SELECT * FROM department WHERE ID='".$row[1]."'");
  $dep=mysqli_fetch_row($dep1);
  echo"<tr>
    <td>$sr</td>
    <td>$dep[1] </td>
    <td>$row[2] </td>
    <td>$row[3] </td>
    <td>$row[4] </td>
    <td>$row[5] </td>
    <td>$row[6] </td>
    <td>
    <img src='$row[7]' style='height:100px;width:100px'>
     </td>
    
    
    <td >
      <a href='update_student.php?id=".$row[0]."' >
      <button type='button' class='btn btn-outline-primary'>Update</button>
      </a>
    </td>
    <td >
      <a href='del_student.php?id=".$row[0]."' >
      <button type='button' class='btn btn-outline-danger'>Delete</button>
      </a>
    </td>
  </tr>";
  
  $sr++;
}
?>
</table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main>

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