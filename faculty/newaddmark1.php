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
		<div class="formholder"><a href="?tag=home">
                	<input type="submit" name="rf" value="Refresh" id="button-in"  /></a>
       		</div>
	</td>
	</tr>
	</table>



<body>
  <article>
	<div id="query_title"></div>

 
<form method="POST" action="newaddmark2.php" target="_blank">
	 <fieldset>
	 <legend><div id="myhd">Add Values :</div></legend>
		 <table>
	     <tr>
		   <td><div id="formvalue">Subject Name:</div></td>
		   <td><div class="formholder"><input type="text"  name="sname" placeholder="" required onkeypress='isspchar(event)'></div></td>
		 </tr>


		  <tr>
		   <td><div id="formvalue">Batch: </div></td>
		   <td><div class="formholder"><select name="batch" id="batch">
                  <option value="a1" >A1</option>
				  <option value="a2" >A2</option>
				  <option value="a3" >A3</option>
				  <option value="a4" >A4</option>
				  <option value="a5" >A5</option>
                  </select></div></td>
		 </tr>
		 
		 
		 <tr>
		   <td><div id="formvalue">Semester: </div></td>
		   <td><div class="formholder"><select name="sem" id="sem">
                  <option value="1" >1</option>
				  <option value="2" >2</option>
				  <option value="3" >3</option>
				  <option value="4" >4</option>
				  <option value="5" >5</option>
				  <option value="6" >6</option>
				  <option value="7" >7</option>
				  <option value="8" >8</option>
                  </select></div></td>
		 </tr>
		 
		 
		 <tr>
		   <td><div id="formvalue">Type: </div></td>
		   <td><div class="formholder"><select name="type" id="type">
                  <option value="1" >T1</option>
				  <option value="2" >T2</option>
				  <option value="3" >T3</option>
				  <option value="11" >V1</option>
				  <option value="12" >V2</option>
                  </select></div></td>
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
	<input type="submit" name="addmarks" value="Add Constraint" id="button-in"  />
	</td>	
	</tr>
	</table>
	</div>
  </form>      
<br><br>
  </article>
</body>
</html>
