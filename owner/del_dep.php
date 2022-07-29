<?php
  $con=mysqli_connect("localhost","root","","votting_project")or die("Database Error....!");
$id=$_GET['id'];
if (mysqli_query($con,"DELETE FROM department WHERE ID='".$id."'"))
{
  echo "
  <script>
  alert('Data Deleted..');
  window.location.href='view_dep.php';
  </script>
  ";
}
else
{
    echo"
  <script>
  alert('Try Again');
  window.location.href='view_dep.php';
  </script>
  ";
}
?>
