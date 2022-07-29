<?php
  $con=mysqli_connect("localhost","root","","votting_project")or die("Database Error....!");

$stu_id=$_POST['stu_id'];
$res=mysqli_query($con,"SELECT * FROM students WHERE ID='".$stu_id."'");
$row=mysqli_fetch_row($res);

$dep1=mysqli_query($con,"SELECT * FROM department WHERE ID='".$row[1]."'");
$dep=mysqli_fetch_row($dep1);
echo'

<div class="featured_title"><h4><a href="#">'.$row[3].'</a></h4></div>
<input type="hidden" value="'.$row[0].'" id="sid2">
									<div class="featured_text">
										<textarea class="form-control"  id="goal" placeholder="Enter Your Goal After Become GS" required=""></textarea>
									</div>

									<div class="featured_footer d-flex align-items-center justify-content-start">
										<div class="featured_author_image"><img src="owner/'.$row[7].'" alt=""></div>
										<div class="featured_author_name">Dep - <a href="#">'.$dep[1].' </a> ['.$row[2].']</div>
									</div>
									
								</div>
							</div>
							<button type="button" name="save" class="btn btn-success btn-sm" onclick="confirmation()">Confirm</button>
							<button type="reset" class="btn btn-danger btn-sm">Cancel</button>
';
?>


