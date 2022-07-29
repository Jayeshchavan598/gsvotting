<?php
$con=mysqli_connect("localhost","root","","votting_project")or die("Database Error....!");
$stu_id=$_GET['sid2'];
$goal=$_GET['goal'];
$pass=$_GET['pass'];

$spass1=mysqli_query($con,"SELECT * FROM  students WHERE ID='".$stu_id."'");
$spass=mysqli_fetch_row($spass1);

$cr1=mysqli_query($con,"SELECT * FROM  registered_students WHERE SID='".$stu_id."'");
if($num=mysqli_num_rows($cr1)>0)
{
	echo "
	<script>
	alert('You have already registered');
	window.location.href='regi_start.php';
	</script>
	";
}
else
{
	if($spass[8]==$pass)
	{
				if(mysqli_query($con,"INSERT INTO registered_students VALUES('','".$stu_id."','".$goal."','')"))
				{
				echo "
				<script>
				alert('Congrats...! Now you have registered as GS Candidate');
				window.location.href='regi_start.php'
				</script>
				";
				}
				else
				{
				  echo "
				<script>
				alert('Try Again');
				window.location.href='regi_start.php'
				</script>
				";
				}
	}
	else
	{
		echo "
	<script>
	alert('Wrong Password');
	window.location.href='regi_start.php';

	</script>
	";
	}
}
?>