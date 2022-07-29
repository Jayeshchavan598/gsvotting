<?php 
  $con=mysqli_connect("localhost","root","","votting_project")or die("Database Error....!");

  $date1=mysqli_fetch_row(mysqli_query($con,"SELECT Registation_date FROM registation_date"));
  $ed=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM generate_date"));
   $result_time=$ed[3];

   $originalDate = $date1[0];
   $regi_date = date("d-m-Y", strtotime($originalDate));

   $originalDate2 = $ed[1];
   $vote_start_date = date("d-m-Y", strtotime($originalDate2));

   $originalDate3 = $ed[2];
   $vote_end_date = date("d-m-Y", strtotime($originalDate3));

   $date2=date('d-M-Y');
   $currentdate = date("d-m-Y", strtotime($date2));

    if($currentdate<$regi_date)  
      {
        echo"1";
      }	
    else if($currentdate>=$regi_date && $currentdate<$vote_start_date)  
      {
        echo"2";
      } 
    else if($currentdate>=$vote_start_date && $currentdate<$vote_end_date)  
    {
      echo"3";
    } 
    else if($currentdate==$vote_end_date)  
    {
      echo"4";
    } 
    else if($currentdate>$vote_end_date)  
    {
      echo"4";
    } 
    
?>