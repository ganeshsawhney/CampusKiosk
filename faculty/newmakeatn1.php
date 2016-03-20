<?php
$id=$_SESSION["id"];
?>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../css/s_css/entry.css">    

	<script type="text/javascript" src="../js/validd.js"></script>
</head>
<body>
  <article>
	
	<table>	
	<tr>
	
	
	<td>        
	
	</td>
	<td>
		<div class="formholder"><a href="#?tag=markatn">
                	<input type="submit" name="rf" value="Refresh" id="button-in"  /></a>
       		</div>
	</td>
	</tr>
	</table>



<body>
  <article>
	<div id="query_title"></div>

 
<form method="post" action="newmakeatn2.php" target="_blank">
	 <fieldset>
	 <legend><div id="myhd">Add Values :</div></legend>
		 <table>
	     <tr>
		   <td><div id="formvalue">Subject Name:</div></td>
		   <td><div class="formholder"><input type="text"  name="sname" placeholder="" required onkeypress='isspchar(event)'></div></td>
		 </tr>
<input type="hidden"  name="iid" value="<?php
echo $id;?>">
		
            
			<tr>
		   <td><div id="formvalue">Batch:</div></td>
		   <td><div class="formholder"><input type="text"  name="bname" placeholder="" required maxlength='2'></div></td>
		 </tr>

            <tr>
		   <td><div id="formvalue">Date of Attendance: </div></td>
		   <td><div class="formholder"><input type="date"  name="doa" required ></div></td>
		 </tr>
		  <tr>
		   <td><div id="formvalue">Time of Attendance: </div></td>
		   <td><div class="formholder"><input type="time"  name="time"  required></div></td>
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
	<input type="submit" name="addconst" value="Add Constraint" id="button-in"  />
	</td>	
	</tr>
	</table>
	</div>
  </form>      
<br><br>
  </article>
</body>
</html>