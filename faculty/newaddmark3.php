<?php
	require("../database/dbconnection.php");
if(isset($_POST['done']))
  {
  
  if(isset($_POST['btch'])){
		$btch=$_POST['btch'];}
		
		
	if(isset($_POST['s_name'])){
		$s_name=$_POST['s_name'];}
		
	if(isset($_POST['sem'])){
		$sem=$_POST['sem'];}
		
	if(isset($_POST['type'])){
		$type=$_POST['type'];}
		
  $crr=$_POST['crtt'];
  $maxmrk=20;
	$tb="marks_lab";
	if($type=='1' || $type=='2' || $type=='3')
		$tb="marks_theory";
	if($type=='t3')
	$maxmrk=35;
	
	$query = "SELECT * FROM student
	JOIN course where course_name ='$s_name' and
	student.batch LIKE '%{$btch}' and student.semester LIKE '%{$sem}'";//AND attendance.date LIKE '%{$doa}'";
	
	$response = mysql_query($query)or die(mysql_error());
	if($response==true)
	{
	
	
	while($row = mysql_fetch_array($response))
	{
	$w1=$row['enroll'];
	
	$err=$_POST[$w1];
	$type=$type%10;
	$tempqry = "insert into `$tb` (`course_id`, `student_id`, `max_marks`, `marks_obtained`,  `type`, `backlog`) values('$crr','$w1','$maxmrk','$err','$type','n')";
	$rese = mysql_query($tempqry)OR die("Error:".mysql_error());;
	if($rese!=true)
	{
	echo "Couldn't issue database query<br />";
	echo mysqli_errno($tempqry);
    }
	}
	echo 'Done';
  
  
  }}
  
  ?>
  
  	<link rel="stylesheet" type="text/css" href="../css/s_css/entry.css">
	<table><tr><td><div class="formholder"><a href='javascript:window.close()'><input align = "left" type=button value="go back" id="button-in"></div></td></tr></table><?php
 