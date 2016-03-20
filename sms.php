<?php
 require("database/dbconnection.php");
 function chkday($today)
{
$day=8;
switch($today)
{
	case 'Mon':{$day=1;break;}
	case 'Tue':{$day=2;break;}
	case 'Wed':{$day=3;break;}
	case 'Thu':{$day=4;break;}
	case 'Fri':{$day=5;break;}
	case 'Sat':{$day=6;break;}
	case 'Sun':{$day=7;break;}
}
return $day;
}
?>
<?php
//Messaging

//if(chkday(date('D', strtotime(date("Y-m-d", $d))))=='Sat')
{
$tquery="Select * from teacher";
$restq = mysql_query($tquery) or die(mysql_error());;		
while($rowtq = mysql_fetch_array($restq))
{
$mam=$rowtq['id'];

$i=7;
while($i--)
{

$g='-';
$g.=$i;
$g.=' Days';

$d=strtotime($g);
$ddt = date('D', strtotime(date("Y-m-d", $d)));
$dtt = date('Y-m-d', strtotime(date("Y-m-d", $d)));
$day=chkday($ddt);


$query1 = "Select distinct `course_id`, `time`, `batch`,teacher.mobile_no from timetable 
			join teacher where teacher_id=id and teacher_id='$mam' and day='$day'";/*"SELECT enroll,batch,first_name,last_name,t2.course_id as csid FROM student
	JOIN crs_teach_stud as t1 
	JOIN course as t2 
ON t1.teacher_id='$id'  and t2.course_id=t1.course_id and t2.course_name LIKE '%{$s_name}' and student.batch LIKE '%{$btch}'";
*/

$response1 = mysql_query($query1) or die(mysql_error());;		
while($row1 = mysql_fetch_array($response1))
{
	$mobb=$row1['mobile_no'];
	$r1=$dtt;
	$r2=$row1['time'];	
	$r3=$row1['course_id'];
	$r4=$row1['batch'];
	$tempqrr="SELECT COUNT(*) as cnt FROM attendance
					JOIN student as t2
					 where student_id=t2.enroll and date='$r1' and time='$r2' and course_id='$r3' and t2.batch='$r4'";

$res = mysql_query($tempqrr) or die(mysql_error());;
$rww=mysql_fetch_array($res);
if($rww['cnt']==0)
{
$mmss='You have not submitted attendance of batch='.$r4.' date='.$r1.' time='.$r2.' and course_id='.$r3;

echo $mam.' '.$mmss.'</br>';
?> <form method="POST" action="faculty/sendsms.php"  target="_blank" id="smsform">
      <input type="hidden" name="uid" value="8146657620" /> 
      <input type="hidden" name="pwd" value="ganeshkapass" /> 
      <input type="hidden" name="phone[]" value="<?php echo $mobb;?>" /> 
      <input type="hidden" name="msg[]" value="<?php echo $mmss;?>" />
	  <!--script type="text/javascript">
    document.getElementById('smsform').submit(); submit();
  </script--> <?php
}
else
echo 'Submitted attendance of batch='.$r4.' date='.$r1.' time='.$r2.' and course_id='.$r3.'<br>';

}
echo '<br>';



}
}

}
 
	  
 

?><input type="submit" name="submit" value="Refresh" id="button-in"  />

