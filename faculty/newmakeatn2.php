<!doctype html>
<?php

	require("../database/dbconnection.php");
if(isset($_POST['addconst']) )
{
$id=$_POST['iid'];
		$btch="";
		$s_name="";
		$doa="";
	if(isset($_POST['bname'])){
		$btch=$_POST['bname'];}
		
		
	if(isset($_POST['sname'])){
		$s_name=$_POST['sname'];}
		
		
	if(isset($_POST['doa'])){
		$doa=$_POST['doa'];}
	if(isset($_POST['time'])){
		$time=$_POST['time'];
		$time.=":00";
		}	
		
	
	$query = "SELECT distinct enroll,batch,first_name,last_name,t2.course_id as csid FROM student
	JOIN crs_teach_stud as t1 
	JOIN course as t2 
ON t1.teacher_id='$id'  and t2.course_id=t1.course_id and t2.course_name LIKE '%{$s_name}' and student.batch LIKE '%{$btch}'";//AND attendance.date LIKE '%{$doa}'";
	
	$response = mysql_query($query) or die(mysql_error());
	if($response==true)
	{
?>
		<html>
		<link rel="stylesheet" type="text/css" href="../css/f_css/entry.css">    
<script type="text/javascript" src="../msg/table.js"></script><link rel="stylesheet" type="text/css" href="../msg/table.css" media="all">
	
	<table class="example table-autosort:0 table-stripeclass:alternate table-stripeclass:alternate" id="TABLE_4"   align="left" cellspacing="15" cellpadding="17">
		<thead><a id="myLink" href="javascript:void(0)" onclick="javascript:myLinkButtonClick();"><tr>
		<th ><h2>Selections</h2></th>
		<th class="filterable table-sortable:numeric table-sortable" title="Click to sort"><h2>Enrollment No.</h2></th>
<th class="filterable table-sortable:default table-sortable" title="Click to sort"      align="left"><h2>Student's Name</h2></th>
<th class="filterable table-sortable:default table-sortable" title="Click to sort"     align="left"><h2>Batch</h2></th>
</tr>


<tr>
		<th>Check to Mark absent</th>
		<th><input name="filter" size="8" onkeyup="Table.filter(this,this)"></th>
		<th><input name="filter" size="8" onkeyup="Table.filter(this,this)"></th>
		<th><input name="filter" size="8" onkeyup="Table.filter(this,this)"></th>
		</a>
	</tr>





</thead>

		<div class="formholder">
		
		<form method="POST" action="newmakeatn3.php">
	<input align = "left" type="submit" name="done" value="Submit the Values" id="button-in"></div></br></br>
<input type="hidden"  name="iiid" value="<?php
echo $id;?>">	
<input type="hidden"  name="iw" value="<?php
echo $s_name;?>">
<input type="hidden"  name="ir" value="<?php
echo $btch;?>">
<input type="hidden"  name="ir1" value="<?php
echo $doa;?>">
<input type="hidden"  name="ir2" value="<?php
echo $time;?>">
<?php
			while($row = mysql_fetch_array($response))
			{
			echo '<tr  >';
			//<a href="javascript:window.location.href=window.location.href"  onclick="?ln=2" title="Update">	
		
			?>
			<td>
			<input type="checkbox" name="chk[]" value="<?php echo $row['enroll'];?>" >	

	</a></td>
				
			<?php
				echo ' <td align="left">' . 
				$row['enroll'] . '</td><td align="left">' .  
$row['first_name'] . $row['last_name'].'</td><td align="left">' .  
$row['batch'] . '</td>';

				
				
			}

		echo '</table>';
		echo "<br>";
}} 
?>
</form>
</html>