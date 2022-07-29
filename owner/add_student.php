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
  <script type="text/javascript" src="jquery.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <script type="text/javascript">
    function get_dep(val)
    {
      $.ajax({
          data: "did="+val,
          type: "POST",
          url: "dep_info_ajax.php",

          success: function(data)
          {
              $("#d1").html(data);
              
          }
      });
    }
  </script>
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

   

    <section class="section">
      
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-7">

          <div class="card"  style="border-top: 3px solid blue">
            <div class="card-body">
              <h5 class="card-title">Add Student</h5>

              <!-- General Form Elements -->
              <form method="POST" action="add_student.php" enctype="multipart/form-data" >
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Dep</label>
                  <div class="col-sm-10">
                     <select type="text" name="depname" class="form-control" required="" onchange="get_dep(this.value)">
                      <option>Select Department</option>
                     <?php
                     $dep1=mysqli_query($con,"SELECT * FROM department");
                     while($dep=mysqli_fetch_row($dep1))
                     {
                      echo "<option value='".$dep[0]."'>$dep[1]</option>";
                     }
                     ?>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Year</label>
                  <div class="col-sm-10">
                    <select type="text" name="year" class="form-control" required="" id="d1">
                      <option>Select Year</option>
                      
                      </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" required="">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="Email" name="mail" class="form-control" required="">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Mob</label>
                  <div class="col-sm-10">
                    <input type="number" name="mob" class="form-control" required="">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Address</label>
                  <div class="col-sm-10">
                    <input type="Address" name="address"  class="form-control" required="">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Image</label>
                  <div class="col-sm-10">
                    <input type="file" name="Photo" class="form-control" required="">
                  </div>
                </div>
                 
                 <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Pass</label>
                  <div class="col-sm-10">
                    <input type="text" name="pass" class="form-control" required="">
                  </div>
                </div>

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
$depname=$_POST['depname'];
$year=$_POST['year'];
$name=$_POST['name'];
$email=$_POST['mail'];
$mobile=$_POST['mob'];
$address=$_POST['address'];
$photo=$_POST['Photo'];
$pass=$_POST['pass'];

    $max1=mysqli_query($con,"SELECT MAX(ID) FROM students");
$max=mysqli_fetch_row($max1);
      if($max[0])
      {
        $max=$max[0];
        $max_id=$max+1;
      }
      else 
      {
       $max_id=1;
       } 


  $file_exists=array("jpg","jpeg","png","gif","bmp","pdf");//file extenssions supported for upload 

        
        $upload_exists = end (explode('.', $_FILES["Photo"]["name"]));//find extension of file 
        if(($upload_exists==null )||($upload_exists==""))//file is none or of 0kb
        {
            
            echo"<script>alert('File Not Select Or uncompatible file'); </script>";
        }
        else
        {
            if((($_FILES['Photo']['size']<2000000) || in_array($upload_exists,$file_exists)))//file size & file extension support
            {
             $newname="$max_id"."_students.png"; 
          $targetfile='upload/'.$newname;//location of folder with target file name 

                if($_FILES['Photo']['error']>0)//check if any error in file 
                {
                    echo"<script>alert('image 2 large  or pdf large size should b less than 2 mb');</script>";
                }
                else
                {
                    //upload file to location set above
                    move_uploaded_file($_FILES['Photo']['tmp_name'],$targetfile);//end img code



if(mysqli_query($con,"INSERT INTO students VALUES('','".$depname."','".$year."','".$name."','".$email."','".$mobile."','".$address."','".$targetfile."','".$pass."')"))
{
echo "
<script>
alert('Data Added');
window.location.href='add_student.php'
</script>";
}
else
{
echo "
<script>
alert('Try Again');
window.location.href='add_student.php'
</script>";
}
}
}
            
        


}
}
?>