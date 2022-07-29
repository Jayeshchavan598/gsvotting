<?php
  $con=mysqli_connect("localhost","root","","votting_project")or die("Database Error....!");
$id=$_GET['sid2'];
if (mysqli_query($con,"DELETE FROM registered_students WHERE SID='".$id."'"))
{
  echo "
  <script>
  alert('Registeration Canceled...!');
  window.location.href='index.php';
  </script>
  ";
}
else
{
    echo"
  <script>
  alert('Try Again');
  window.location.href='index.php';
  </script>
  ";
}
?>
