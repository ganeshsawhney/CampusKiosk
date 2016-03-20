<html lang="en">
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../css/Student_entry.css">    
</head>
<body>

<article>

<div id="query_title"></div>

<br>
	 <fieldset>
	 <legend>Personal Information</legend>
		 <table>

<?php

	$sql_sel=mysql_query("SElECT * FROM admin WHERE id='".$_SESSION["adminid"]."' ");
	$row=mysql_fetch_array($sql_sel);
?>

<br>

                 <tr>
		   <td><div id="formvalue">USER ID:</div></td>
		   <td><?php echo $row['id'];?></td>                   
		 </tr>

                <tr>
		   <td><div id="formvalue">FIRST NAME</div></td>
		    <td><?php echo $row['first_name'];?></td>
		 </tr>

                <tr>
		   <td><div id="formvalue">LAST NAME</div></td>
		    <td><?php echo $row['last_name'];?></td>
                 </tr>

		 <tr>
		   <td><div id="formvalue">GENDER:</td>
		    <td><?php echo $row['gender'];?></td>
                 </td>

		 <tr>
		   <td><div id="formvalue">DATE OF BIRTH:</td>
		   <td><?php echo $row['dob'];?></td>
		 </tr>

		 <tr>
		   <td><div id="formvalue">CONTACT NO. :</td>
		   <td><?php echo $row['mobile_number'];?></td>
		 </tr>


                 <tr>
		   <td><div id="formvalue">EMAIL_ID:</td>
		   <td><?php echo $row['email'];?></td>
		 </tr>

		<tr>
		   <td><div id="formvalue">TYPE:</td>
		    <td><?php echo $row['type'];?></td>
		 </tr>

                 <tr>
		   <td><div id="formvalue">USERNAME:</td>
		    <td><?php $user=$row['username'];
			$username=strtoupper($user);
			echo $username; ?></td>
		 </tr>


		 
		 </table>
<br>	
 </fieldset>
	 
<br><br><br><br>
	 
	</div>
      

  </article>

</body>
</html>
