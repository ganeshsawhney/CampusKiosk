<!--for deletion of Record -->
<?php
	$operation="";
	$msg="";
	
	if(isset($_GET['operation']))
	{
		$operation=$_GET['operation'];
	}

	
	if(isset($_GET['course_id']))
		$id=$_GET['course_id'];

	if($operation=="del")
	{
		$del_sql=mysql_query("DELETE FROM course WHERE course_id='$id' ");

		if($del_sql)
			$msg="1 Record Deleted... !";
		else
			$msg="Could not Delete :".mysql_error();	
			
	}
	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>View courses</title>
<link rel="stylesheet" type="text/css" href="css/view_admin.css" />
</head>

<body>
<div id="title" >
<form method="post">

<table width="755">
	<tr>
    	<td width="190px" style="font-size:18px; color:#006; text-indent:30px;">View courses</td>
        <td>
        	<a href="?tag=course_entry"><input type="button" title="Add new course" name="addNew" value="Add New" id="button-search" /></a>
        </td>
        <td>
        	<input type="text" name="searchtxt" title="Enter name for search " class="search" autocomplete="off"/>
        </td>
        <td style="float:right">
        	<input type="submit" name="btnsearch" value="Search" id="button-search" title="Search course" />
        </td>
    </tr>

</table>
</form>
</div><!--- end of style_div -->

<br />


<div id="list-table">
<form method="post">

    <table border="1" width="2000px" align="center" cellpadding="3" class="mytable" cellspacing="0">
        <tr>
            <th>S.No.</th>
            <th>Course Name</th>
            <th>Course Id</th>
            <th>Course Type</th>
            <th>Department</th>
            <th>Semester</th>
            <th>Year</th>
            <th>Operation</th>
        </tr>
       
 
        <?php
	$key="";
	if(isset($_POST['searchtxt']))
		$key=$_POST['searchtxt'];
	
	if($key !="")
		$sql_sel=mysql_query("SElECT * FROM course WHERE course_name  like '%$key%' or course_type like '%$key%' or course_id like '%$key%' or semester like '%$key%' or department like '%$key%' ");

	else
		 $sql_sel=mysql_query("SELECT * FROM course");
	
		
       
    $i=0;
    while($row=mysql_fetch_array($sql_sel))
   {
	    $i++;
	    $color=($i%2==0)?"lightblue":"white";
?>

	      <tr bgcolor="<?php echo $color?>">
		    <td><?php echo $i;?></td>
		    <td><?php echo $row['course_name'];?></td>
		    <td><?php echo $row['course_id'];?></td>
		    <td><?php echo $row['course_type'];?></td>
		    <td><?php echo $row['department'];?></td>
		    <td><?php echo $row['semester'];?></td>
		    <td><?php echo $row['year'];?></td>
		    <td><a href="?tag=courses&operation=del&course_id=<?php echo $row['course_id'];?>" title="Delete"><img src="image/delete.png" /></a></td>
		     
		</tr>
<?php	

    }
	
// ----- for search studnens------	
		
	
?>
    </table>
</form>
</div>
</body>
</html>
