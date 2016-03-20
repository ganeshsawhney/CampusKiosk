<!DOCTYPE html>
<?php
   session_start();
	if(isset($_GET["logout"]))
	{
		unset($_SESSION["iamin"]);
		header("Location: ../login.php");
	}

	if(!isset($_SESSION["iamin"]))
	{
		header("Location: ../login.php");
	}

	require("../database/dbconnection.php");

	$tag="home";
	if (isset($_GET['tag']))
	$tag=$_GET['tag'];
?>





<html lang="en">

<head>


<meta charset="utf-8" />
<title>Faculty - <?php 
$id=$_SESSION["id"];
$query = "SELECT * FROM teacher where id='$id'";
$response = mysql_query($query);

$row = mysql_fetch_array($response);
		echo $row['first_name'] .' '. $row['last_name'];

?></title>

<link rel="stylesheet" type="text/css" href="../css/f_css/faculty.css" />
<link rel="stylesheet" type="text/css" href="../css/f_css/faculty_right.css" />
    
<link rel="stylesheet" type="text/css" href="../css/f_css/passwordstyles.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/x.x.x/jquery.min.js"></script>
  
	
	<script type="text/javascript" src="../msg/table.js"></script><link rel="stylesheet" type="text/css" href="../msg/table.css" media="all">
	
	<script type="text/javascript" src="../js/validd.js"></script>
	
<script src="../js/dropdown.js"></script>
<script>
    $(document).ready(function() {
        $( '.dropdown' ).hover(
            function(){
                $(this).children('.sub-menu').slideDown(200);
            },
            function(){
                $(this).children('.sub-menu').slideUp(200);
            }
        );
    });
</script>

</head>

<body>

<div id="wrapper">

<header>
  <div class="title">
      <h2>KALAM INSTITUTE OF ENGINEERING AND TECHNOLOGY</h2>
   </div>    

</header>  
	<nav>
	    <ul class="content clearfix">
		
		<li> <a href="?tag=home">Home</a> </li>

		<li class="dropdown">

		<li class="dropdown">
			   <a href="#">Personal Info</a>
                <ul class="sub-menu">
                    <li><a href="?tag=f_getdetails">Personal Details</a></li>
                    <li><a href="?tag=f_editdetails">Edit Info.</a></li>
                 
                </ul>
				</li>
				
				
		<li class="dropdown">
			   <a href="#">Attendance</a>
                <ul class="sub-menu">
                    <li><a href="?tag=markatn">Mark Attendance</a></li>
                    <li><a href="?tag=editatn">Edit attendance.</a></li>
                    <li><a href="?tag=showatn">Show attendance.</a></li>
                 
                </ul>
				</li>
				
		<li class="dropdown">
			   <a href="#">Marks</a>
                <ul class="sub-menu">
                    <li><a href="?tag=addmarks">Add Marks</a></li>
                    <li><a href="?tag=editmarks">Edit Marks.</a></li>
                    <li><a href="?tag=showmark">Show Marks.</a></li>
                 
                </ul>
				</li>
				
					
		<li class="dropdown">

			   <a href="#">Messaging</a>
                <ul class="sub-menu">
                    <li><a href="?tag=createmsg">Compose</a></li>
                    <li><a href="?tag=showmsg">Inbox</a></li>
                </ul>
				</li>
				
            

		<li id="enroll"><!?php echo "Welcome ".$_SESSION["username"]; ?> </li>
	    </ul>
	</nav>

   </div>
</header>






<div id="leftmenu">
<section> 
  <aside id="side_links">
    <ul>
		   <li><a href="?tag=home">Home</a></li>		   
		   <li><a href="?tag=createmsg">Send Message</a></li>
		   <li><a href="?tag=showmsg">Notifications</a></li>
		   <li><a href="?tag=password">Change Password</a></li>
		   <li><a href="?logout=logout">Logout</a></li>
		   
    </ul>
  
  </aside>

  </section>
</div>
</div><!--end of leftmenu -->



<div id="rightmenu">

   	<?php

		if($tag=="home" or $tag=="")
			    include("default.php");

                        if($tag=="f_editdetails")
                            include("f_editdetails.php");
						
						elseif($tag=="f_getdetails")
                            include("f_getdetails.php");
						
                        elseif($tag=="markatn")
                            include("newmakeatn1.php");
						
                        elseif($tag=="editatn")
                            include("f_editatn.php");

							elseif($tag=="createmsg")
                            include("../msg/form.php");
							elseif($tag=="showatn")
                            include("f_showatn.php");
							elseif($tag=="showmark")
                            include("f_showmark.php");
						
							elseif($tag=="password")
                            include("password.php");
						
						elseif($tag=="showmsg")
                            include("../msg/showform.php");
							
						elseif($tag=="addmarks")
                            include("newaddmark1.php");
							
						elseif($tag=="editmarks")
                            include("f_editmark.php");
									
        ?>
	    </div> <!--end of rightmenu -->




</div>  <!--endl of wrapper -->

</body>
</html>