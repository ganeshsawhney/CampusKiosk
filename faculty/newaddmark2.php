<!doctype html>
<?php

	require("../database/dbconnection.php");
if(isset($_POST['addmarks']) )
{
		/*if(empty($s_name))
		$sname="%";
		if(empty($atnval))
		$atnval="%";
		if(empty($doa))
		$doa="%";*/
		
		$btch="";
		$s_name="";
		$sem="";
		$type="";
	if(isset($_POST['batch'])){
		$btch=$_POST['batch'];}
		
		
	if(isset($_POST['sname'])){
		$s_name=$_POST['sname'];}
		
	if(isset($_POST['sem'])){
		$sem=$_POST['sem'];}
		
	if(isset($_POST['type'])){
		$type=$_POST['type'];}
	
	
	$tb="Lab";
	if($type=='1' || $type=='2' || $type=='3')
		$tb="Lecture";
	
	
	$query = "SELECT * FROM student
	JOIN course where course_name ='$s_name' and course_type='$tb' and
	student.batch LIKE '%{$btch}' and student.semester LIKE '%{$sem}'";//AND attendance.date LIKE '%{$doa}'";
	$crr="";
	$response = mysql_query($query)or die(mysql_error());
	if($response==true)
	{
?>
		
		
		
		<link rel="stylesheet" type="text/css" href="../css/f_css/entry.css">    
	<script type="text/javascript" src="../js/validd.js"></script>
		
	<table class="example table-autosort:0 table-stripeclass:alternate table-stripeclass:alternate" id="TABLE_4"   align="left" cellspacing="15" cellpadding="17">
		<thead><a id="myLink" href="javascript:void(0)" onclick="javascript:myLinkButtonClick();"><tr>
		<th ><h2>Marks</h2></th>
		<th class="filterable table-sortable:numeric table-sortable" title="Click to sort"><h2>Enrollment No.</h2></th>
<th class="filterable table-sortable:default table-sortable" title="Click to sort"      align="left"><h2>Student's Name</h2></th>
<th class="filterable table-sortable:default table-sortable" title="Click to sort"     align="left"><h2>Batch</h2></th>
</tr>


<tr>
		<th> </th>
		<th><input name="filter" size="8" onkeyup="Table.filter(this,this)"></th>
		<th><input name="filter" size="8" onkeyup="Table.filter(this,this)"></th>
		<th><input name="filter" size="8" onkeyup="Table.filter(this,this)"></th></a>
	</tr>
</thead>



		<div class="formholder">
		<form method="POST" action="newaddmark3.php">
	<input align = "left" type="submit" name="done" value="Submit Marks" id="button-in"></div></br></br>
	
<input type="hidden"  name="type" value="<?php
echo $type;?>">
<input type="hidden"  name="sem" value="<?php
echo $sem;?>">
<input type="hidden"  name="btch" value="<?php
echo $btch;?>">
<input type="hidden"  name="s_name" value="<?php
echo $s_name;?>">

	<?php		
			while($row = mysql_fetch_array($response))
			{
			echo '<tr  >';?>
			
			
			<td>
	<script type="text/javascript" src="../js/validd.js"></script>
			<input type=hidden name="crtt" value="<?php echo $row['course_id'];?>" >
			<input type="text" name="<?php echo $row['enroll'];?>"  onkeypress='onlynum()' required maxlength="2">		
	</a></td>
	<?php
				echo ' <td align="left">' . 
				$row['enroll'] . '</td><td align="left">' .  
$row['first_name'] . $row['last_name'].'</td><td align="left">' .  
$row['batch'] . '</td><td align="left">';

				
				
			}

		echo '</table>';
		echo "<br>";
} 
else 
{
	echo "Couldn't issue database query<br />";
}
}
?>