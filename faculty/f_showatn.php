<!doctype html>
<?php
$id=$_SESSION["id"];
if(isset($_POST['updateconst']))
  {
  $btch = $_POST['batch'];
  $sname = $_POST['sname'];
  $doa= $_POST['doa'];
  $time = $_POST['time'];
  $time.=":00";
  $qr="select * from course where course_name='$sname'";
  $qr1 = mysql_query($qr)OR die("Error:".mysql_error());;
	if($qr1==true)
	{
	$rrr=mysql_fetch_array($qr1);
	$x=$rrr['course_id'];
    $tempqry = "select * from attendance
					join student
					where student.enroll=attendance.student_id and student.batch='$btch' and course_id='$x' and
date='$doa' and
time='$time' ";
	$rese = mysql_query($tempqry)OR die("Error:".mysql_error());;
	if($rese==true)
	{
	
	?>
	
	
	
	
	<html>
		<link rel="stylesheet" type="text/css" href="../css/f_css/entry.css">    
<script type="text/javascript" src="../msg/table.js"></script><link rel="stylesheet" type="text/css" href="../msg/table.css" media="all">
	
	<table class="example table-autosort:0 table-stripeclass:alternate table-stripeclass:alternate" id="TABLE_4"   align="left" cellspacing="15" cellpadding="17">
		<thead><a id="myLink" href="javascript:void(0)" onclick="javascript:myLinkButtonClick();"><tr>
		<th class="filterable table-sortable:numeric table-sortable" title="Click to sort"><h2>Enrollment No.</h2></th>
<th class="filterable table-sortable:default table-sortable" title="Click to sort"      align="left"><h2>Student's Name</h2></th>
<th class="filterable table-sortable:default table-sortable" title="Click to sort"      align="left"><h2>Batch</h2></th>
<th class="filterable table-sortable:default table-sortable" title="Click to sort"      align="left"><h2>Course Name</h2></th>
<th class="filterable table-sortable:default table-sortable" title="Click to sort"     align="left"><h2>Attendance</h2></th>
</tr>


<tr>
		<th><input name="filter" size="8" onkeyup="Table.filter(this,this)"></th>
		<th><input name="filter" size="8" onkeyup="Table.filter(this,this)"></th>
		<th><input name="filter" size="8" onkeyup="Table.filter(this,this)"></th>
		<th><input name="filter" size="8" onkeyup="Table.filter(this,this)"></th>
		<th><input name="filter" size="8" onkeyup="Table.filter(this,this)"></th>
		</a>
	</tr>





</thead>


<?php
			while($row = mysql_fetch_array($rese))
			{
			echo '<tr  >';
			//<a href="javascript:window.location.href=window.location.href"  onclick="?ln=2" title="Update">	
		
			?>
				
			<?php
				echo ' <td align="left">' . 
				$row['enroll'] . '</td><td align="left">' .  
$row['first_name'] . $row['last_name'].'</td><td align="left">' .  
$row['batch'] . '</td><td align="left">' .  
$sname . '</td><td align="left">' .  
$row['attendance'] . '</td>';

				
				
			}

		echo '</table>';
		echo "<br>";

	
	
	}
	}}
  
 
  else{
		

?>

<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../css/s_css/entry.css">    

</head>
<body>
  <article>
	
	<table>	
	<tr>
	
	
	<td>        
	
	</td>
	<td>
		<div class="formholder"><a href="#?tag=editatn">
                	<input type="submit" name="rf" value="Refresh" id="button-in"  /></a>
       		</div>
	</td>
	</tr>
	</table>



<body>
  <article>
	<div id="query_title"></div>

 
<form method="POST">
      <fieldset>
	 <legend><div id="myhd">Edit Values :</div></legend>
		 <table>
	     <tr>
		   <td><div id="formvalue">Subject Name:</div></td>
		   <td><div class="formholder"><input type="text"  name="sname" placeholder="" required onkeypress='isspchar(event)'></div></td>
		 </tr>

		<tr>
		   <td><div id="formvalue">Batch:</div></td>
		   <td><div class="formholder"><input type="text"  name="batch" placeholder="" required maxlength='2'></div></td>
		 </tr>
            
		 

            <tr>
		   <td><div id="formvalue">Date of Attendance: </div></td>
		   <td><div class="formholder"><input type="date"  name="doa" required></div></td>
		 </tr>
		  <tr>
		   <td><div id="formvalue">Time of Attendance: </div></td>
		   <td><div class="formholder"><input type="time"  name="time" required></div></td>
		 </tr>

			</table>
      </fieldset>
	  <br>
       
	   
	   <div class="formholder">
	   
	   <table>
	<tr>
	<td>
	<a href="?tag=home"> 
	<input type="button" value="Cancel" >
	</a>
	</td>
	<td>	 
	<input type="submit" name="updateconst" value="Update" id="button-in"  />
	</td>	
	</tr>
	</table>
	</div>
  </form>      
<br><br>
  </article>
</body>
</html>
			
            

<?php 
}?>