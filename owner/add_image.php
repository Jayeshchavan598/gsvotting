 <!DOCTYPE html>
<html lang="en">
<?php
$con4=mysqli_connect("localhost","root","","home")or die("Database problem...!");

?>
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
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Project</title>

    <!-- Fontfaces CSS-->
    <link href="../admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="../admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../admin/css/theme.css" rel="stylesheet" media="all">
    <script type="text/javascript">
        function get_owner(val)
        {
            $.ajax({
             type: "POST",
             url: 'owner_ajax.php',
             data: {pro_id: val},
             success: function(data)
             {
             // document.getElementById('pid2').value=data;
             $('#pid2').html(data);
             }
            });
        }
    </script>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <?php
        include('menu.php');
        ?>
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        <header class="header-mobile header-mobile-2 d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="sub-header-mobile-2 d-block d-lg-none">
            <div class="header__tool">
                <div class="header-button-item has-noti js-item-menu">
                    <i class="zmdi zmdi-notifications"></i>
                    <div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
                        <div class="notifi__title">
                            <p>You have 3 Notifications</p>
                        </div>
                        <div class="notifi__item">
                            <div class="bg-c1 img-cir img-40">
                                <i class="zmdi zmdi-email-open"></i>
                            </div>
                            <div class="content">
                                <p>You got a email notification</p>
                                <span class="date">April 12, 2018 06:50</span>
                            </div>
                        </div>
                        <div class="notifi__item">
                            <div class="bg-c2 img-cir img-40">
                                <i class="zmdi zmdi-account-box"></i>
                            </div>
                            <div class="content">
                                <p>Your account has been blocked</p>
                                <span class="date">April 12, 2018 06:50</span>
                            </div>
                        </div>
                        <div class="notifi__item">
                            <div class="bg-c3 img-cir img-40">
                                <i class="zmdi zmdi-file-text"></i>
                            </div>
                            <div class="content">
                                <p>You got a new file</p>
                                <span class="date">April 12, 2018 06:50</span>
                            </div>
                        </div>
                        <div class="notifi__footer">
                            <a href="#">All notifications</a>
                        </div>
                    </div>
                </div>
                <div class="header-button-item js-item-menu">
                    <i class="zmdi zmdi-settings"></i>
                    <div class="setting-dropdown js-dropdown">
                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-account"></i>Account</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-settings"></i>Setting</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-money-box"></i>Billing</a>
                            </div>
                        </div>
                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-globe"></i>Language</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-pin"></i>Location</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-email"></i>Email</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-notifications"></i>Notifications</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="image">
                            <img src="images/icon/avatr-01.jpg" alt="John Doe" />
                        </div>
                        <div class="content">
                            <a class="js-acc-btn" href="#">john doe</a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="#">
                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#">john doe</a>
                                    </h5>
                                    <span class="email">johndoe@example.com</span>
                                </div>
                            </div>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-account"></i>Account</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                                <a href="#">
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HEADER MOBILE -->

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- BREADCRUMB-->
           
            <!-- END BREADCRUMB-->

            <!-- WELCOME-->
       
            <!-- END WELCOME-->

            <!-- STATISTIC-->
            <section class="statistic statistic2">
                <div class="container">
                  <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header" style="background-color: black; color: white; text-align: center;">Property Images</div>
                                    <div class="card-body">
                                       
                                        <hr>
                                        <form action="add_image.php" method="post" enctype="multipart/form-data">


                                            <div class="row">
                                                <div class="col-lg-12">
                                                     <div class="form-group has-Primary">
                                                    <label for="cc-name" class="control-label mb-1"> Property</label>
                                                  <select class="form-control" name="pro_id2" onchange="get_owner(this.value)">
                                                      <option>Select Property Type</option>
                                                      <?php
                                                      $res=mysqli_query($con4,"SELECT * FROM property WHERE owner_id='".$_SESSION['owner']."'");
                                                      while($row=mysqli_fetch_array($res))
                                                      {
                                                        echo "<option value='".$row[0]."'>$row[1]</option>";
                                                      }
                                                      ?>
                                                  </select>
                                                    </div>
                                                </div>
                                            </div>
                                            

                                             <div class="row">
                                                <div class="col-lg-12">
                                                     <div class="form-group has-Primary" id="pid2">

                                                    <!-- Data from ajax -->

                                                    </div>
                                                </div>
                                            </div>
                                                
                                             

                                             <div class="row">
                                                <div class="col-lg-12">
                                                     <div class="form-group has-success">
                                                    <label for="cc-name" class="control-label mb-1">Image</label>
                                                   <input type="file" class="form-control" name="Photo">
                                                    </div>

                                                </div>

                                               
                                            <div class="col-lg-7">
                                                     <button id="button" type="submit" class="btn btn-lg btn-info pull-right" name="ok">
                                                    
                                                    <div id="payment-button-amount">Save</div>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
          
                                    </div>
                                </div>
                            </div>
                        
                       
                        </div>
                </div>
            </section>
            <!-- END STATISTIC-->

            <!-- STATISTIC CHART-->

            <!-- END STATISTIC CHART-->

            <!-- DATA TABLE-->
         
            <!-- END DATA TABLE-->
         <?php
          include('footer.php');
          ?>
            <!-- END COPYRIGHT-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="../admin/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../admin/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../admin/vendor/slick/slick.min.js">
    </script>
    <script src="../admin/vendor/wow/wow.min.js"></script>
    <script src="../admin/vendor/animsition/animsition.min.js"></script>
    <script src="../admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../admin/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../admin/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../admin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../admin/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../admin/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../admin/js/main.js"></script>

</body>

</html>
<!-- end document-->

 <?php

if(isset($_POST['ok']))
{
    $pro_id2=$_POST['pro_id2'];
  
    $max1=mysqli_query($con4,"SELECT MAX(ID) FROM pimage");
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
             $newname="$max_id"."_pro.png"; 
          $targetfile='upload/'.$newname;//location of folder with target file name 

                if($_FILES['Photo']['error']>0)//check if any error in file 
                {
                    echo"<script>alert('image 2 large  or pdf large size should b less than 2 mb');</script>";
                }
                else
                {
                    //upload file to location set above
                    move_uploaded_file($_FILES['Photo']['tmp_name'],$targetfile);//end img code



                        if(mysqli_query($con4,"INSERT INTO pimage VALUES('','".$pro_id2."','".$targetfile."','".$_SESSION['owner']."')"))
                        {
                            echo "<script>
                            alert('User Added Sucessfully');
                           window.location.href='add_image.php';
                            </script>";

                        }
                        else
                        {
                            echo "<script>
                            alert('User Not Added Sucessfully');
                           window.location.href='add_image.php';
                            </script>";

                        }
                    }
                }
            }
        }
                                        
    ?>
