<?php
  $con=mysqli_connect("localhost","root","","votting_project")or die("Database Error....!");

$did=$_POST['did'];
// $res=mysqli_query($con,"SELECT * FROM students");
// $row=mysqli_fetch_row($res);
if($did==1)
{
echo "
<option>Select Year</option>

<option>First Year</option>
<option>Second Year</option>
<option>Third Year</option>
<option>Final Year</option>
";
}
else
{
echo "
<option>Select Year</option>

<option>First Year</option>
<option>Second Year</option>
<option>Third Year</option>
";
}
?>