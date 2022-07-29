<?php

session_start();
if(isset($_SESSION['stu']))
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
<?php
  $con=mysqli_connect("localhost","root","","votting_project")or die("Database Error....!");

$profile1=mysqli_query($con,"SELECT * FROM students WHERE ID='".$_SESSION['stu']."'");
$profile=mysqli_fetch_row($profile1);
?>
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="img/ic.png" alt="">
        <span class="d-none d-lg-block">GS Votting System</span>
      </a>
    </div><!-- End Logo -->

   

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        
        
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../owner/<?php echo $profile[7]?>" style="height: 100px;width: 50px" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $profile[3]?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          
            <li>
              <hr class="dropdown-divider">
            </li>


            

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header>