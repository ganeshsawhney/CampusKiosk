<!doctype html>
<?php
$enr=$_SESSION["enroll"];
if(isset($_POST['submit']))
{
	$f_name=$_POST['fname'];
	$l_name=$_POST['lname'];
	$dob=$_POST['dob'];
	$contact=$_POST['contact'];
	$mail=$_POST['mail'];
	$caddr=$_POST['paddr'];
	$paddr=$_POST['paddr'];
	$father=$_POST['father'];
	$mother=$_POST['mother'];
	$blood=$_POST['blood'];
	$pass=$_POST['pass'];

$sql_ins=mysql_query("UPDATE student SET `first_name`='$f_name', `last_name`='$l_name', `dob`='$dob', `mobile_no`='$contact',  `email`='$mail', `temp_addr`='$caddr', `perm_addr`='$paddr', `fname`='$father', `mname`='$mother', `bld_grp`='$blood', `pwd`='$pass' where enroll='$enr'");
if($sql_ins==true)
	$msg="Changes took place successfully";
else
	$msg="Update Error:".mysql_error();

print $msg;
}

?>

<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../css/s_css/entry.css">    

	<script type="text/javascript" src="../js/validd.js"></script>
</head>
<body>
  <article>
	<div id="query_title"></div>
	<table>	
	<tr>
	
	<td>
	<pre><div id="myhd">Update Your Details                          </div></pre>
	
	</td>
	<td>        
	
	</td>
	<td>
		<div class="formholder"><form method="post">
            	<a href="?tag=getdetails"><input type="button" name="students_view" value="View Your Details" id="students_view"/></a>
       		</form></div>
	</td>
	</tr>
	</table>

 
 
 
 
 
 
 <form method="POST">
      
	 <fieldset>
	 <legend><div id="myhd">Personal Information</div></legend>
		 <table>
	     <tr>
		   <td><div id="formvalue">First Name:*</div></td>
		   <td><div class="formholder"><input type="text"  name="fname" placeholder="First Name" required onkeypress='isspchar(event)'></div></td>
		 </tr>

		 <tr>
		   <td><div id="formvalue">Last Name:*</div></td>
		   <td><div class="formholder"><input type="text"  name="lname" placeholder="Last Name" required onkeypress='isspchar(event)'></div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Date of Birth:*</div></td>
		   <td><div class="formholder"><input type="date"  name="dob" required></div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Blood Group:</div></td>
		   <td><div class="formholder">
			<select name="blood">
			        <option value="a+">A+</option>
				<option value="a-">A-</option>
				<option value="b+">B+</option>
				<option value="b-">B-</option>
				<option value="o+">O+</option>
				<option value="o-">O-</option>
				<option value="ab+">AB+</option>
				<option value="ab-">AB-</option>
		        </select></div>
		   </td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Father Name:*</div></td>
		   <td><div class="formholder"><input type="text"  name="father" placeholder="Father Name" required onkeypress='isspchar(event)'></div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Mother Name:*</div></td>
		   <td><div class="formholder"><input type="text"  name="mother" placeholder="Mother Name" required onkeypress='isspchar(event)'></div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Contact:*</div></td>
		   <td><div class="formholder"><input type="number_format"  name="contact" required maxlength='10' onkeypress='onlynum(event)'></div></td>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Permanent Address:*</div></td>
		   <td><div class="formholder"><textarea  name="paddr" required></textarea></div>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Current Address:</div></td>
		   <td><div class="formholder"><textarea  name="caddr"></textarea></div>
		 </tr>
		 <tr>
		   <td><div id="formvalue">Email_ID:*</div></td>
		   <td><div class="formholder"><input type="email"  name="mail" required></div></td>
		 </tr>
		 </table>
	 </fieldset>
	 
	 <br>
	 
	 <fieldset>
	 <legend><div id="myhd">Security Information</div></legend>
	     <table>
		 <tr>
		   <td><div id="formvalue">Password:*</div></td>
		   <td><div class="formholder"><input type="text" name="pass" required></td>
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
	<input name="submit" type="submit" value="Update info">
	</td>	
	</tr>
	</table>
	</div>
  </form>      
<br><br>
  </article>
</body>
</html>
 