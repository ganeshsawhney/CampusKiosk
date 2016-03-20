<!DOCTYPE html>
<html>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/x.x.x/jquery.min.js"></script>

<?php 


include ('way2sms-api.php');

if(isset($_POST['submit']))
{
  if (isset($_POST['uid']) && isset($_POST['pwd']) && isset($_POST['phone']) && isset($_POST['msg']))
  {
  $arr=$_POST['phone'];
 $arr1= $_POST['msg'];
 for($i=0;$i<sizeof($arr);$i++)
 {
  
    $smsg = stripslashes($arr1[$i]);
    $res =  sendWay2SMS($_POST['uid'], $_POST['pwd'], $arr[$i], $smsg);
    if(is_array($res)) echo $res[0]['result'] ? 'true' : 'false';
    else echo $res;
}
  }
 }
/*
?>

<script>
window.open('', '_self', ''); 
window.close();</script></html>*/