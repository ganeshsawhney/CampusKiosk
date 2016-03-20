<?php


	require("../database/dbconnection.php");
$aDoor=array();
if(isset($_POST['done']))
  {
  $id=$_POST['iiid'];
  $s_name=$_POST['iw'];
  $btch=$_POST['ir'];
  $doa=$_POST['ir1'];
  $time=$_POST['ir2'];
  
  	$query = "SELECT distinct enroll,batch,first_name,last_name,t2.course_id as csid FROM student
	JOIN crs_teach_stud as t1 
	JOIN course as t2 
ON t1.teacher_id='$id'  and t2.course_id=t1.course_id and t2.course_name LIKE '%{$s_name}' and student.batch LIKE '%{$btch}'";//AND attendance.date LIKE '%{$doa}'";
	
	$response = mysql_query($query);
	if($response==true)
	{

  
if(isset($_POST['chk']))
  $aDoor = $_POST['chk'];
    $N = count($aDoor);
	while($row = mysql_fetch_array($response))
	{
	$crss=$row['csid'];
	$w1=$row['enroll'];
	$pr='y';
	if(!empty($aDoor)){ 
	if (in_array($w1, $aDoor))
	$pr='n';}
	//insert into attendance values('10B121','2014-02-02','14:02:00',993478,'y','n','n','0')
	$tempqry = "insert into attendance values('$crss','$doa','$time',$w1,'$pr','n','n','0')";
	$rese = mysql_query($tempqry)OR die("Error:".mysql_error());;
	if($rese!=true)
	{
	/*echo $crss;
	echo $w1;
	echo $doa;*/
	echo "Couldn't issue database query<br />";
	echo mysqli_errno($tempqry);
    }
	}
	?>
	<script type="text/javascript" src="../msg/table.js"></script><link rel="stylesheet" type="text/css" href="../msg/table.css" media="all">
	
	<link rel="stylesheet" type="text/css" href="../css/s_css/entry.css">
	<table><tr><td><div class="formholder"><a href='javascript:window.close()'><input align = "left" type=button value="go back" id="button-in"></div></td></tr></table><?php
 
}}