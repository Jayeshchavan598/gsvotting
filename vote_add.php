
<?php
$con=mysqli_connect("localhost","root","","votting_project")or die("Database Error....!");

// $vc=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM vote WHERE voter='".$_SESSION['stu']."'"));
$voter1=mysqli_query($con,"SELECT * FROM students WHERE password='".$_GET['passw']."'");

if($voters=mysqli_num_rows($voter1)>0)
{
	$voter=mysqli_fetch_row($voter1);
	 $voter_id=$voter[0];
	 $candidate_id=$_GET['cid'];

	 
	// code here
	$already_voted1=mysqli_query($con,"SELECT * FROM vote WHERE voter='".$voter_id."'");
	$already_voted=mysqli_fetch_row($already_voted1);
	if($already_voted)
	{
		echo "<script>
		alert('You have already voted...!');
		window.location.href='voting.php';
		</script>";
	}
	else
	{
		if(mysqli_query($con,"INSERT INTO vote values('','".$voter_id."','".$candidate_id."')"))
		{
			$v=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM registered_students WHERE SID='".$candidate_id."'"));
			$cnt=$v[3]+1;
			if(mysqli_query($con,"UPDATE registered_students SET vote_count='".$cnt."' WHERE SID='".$candidate_id."'"))
			{
				echo "<script>
			alert('Voting Successfull');
			window.location.href='voting.php';
			</script>";
			}
			
		}
	}
	
	
}
else
{
	echo "<script>
alert('Wrong Password');
window.location.href='voting.php';
</script>";
	
}

?>