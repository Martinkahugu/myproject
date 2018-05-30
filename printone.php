<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<SCRIPT LANGUAGE="JavaScript"> 
if (window.print) 
</script>

<font  color="#FF0000"> <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; MEMBER OF WACHIURI GRANDSONS SELF HELP GROUP<BR/></b></font>
</head>

<body onload="window.print()"><b><i>
<table><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;NAME</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MEMBERSHIP NO.</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PHONE NO.</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ID NO.</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EMAIL</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PHOTO</td></tr></table></i></b>




<?php 
if(isset($_REQUEST['printoneb']))
{
$erasor=$_REQUEST['id'];
$year=$_REQUEST['year'];
$connect=mysql_connect('localhost','root','');
if(!$connect) 
{
die('Database connection was not possible!');
}
$select=mysql_select_db('grandsons');
if(!$select)
{
die('Selection of the database was not possible!');}
else
{

$sql="SELECT * FROM members WHERE memberid='$erasor'";

$sql2="SELECT * FROM contribution WHERE memberid='$erasor' AND year='$year' ORDER BY month ASC";

$result=mysql_query($sql,$connect)or die('query failed');
$result2=mysql_query($sql2,$connect)or die('query failed');

while($row = mysql_fetch_array($result))
{  
$photo=$row['picture'];
echo "<table><tr> <td>";
echo $row['fullname'];
echo "</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo  $row['memberid'];

echo "</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo  $row['phone'];
echo "</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo  $row['nationalid'];

echo "</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo  $row['email'];

echo "</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo ("<img src='http://localhost/grandsons/projectpics/%20$photo' width=50 height=50 class='pic' align='center'>");

echo "</td></tr></table>";
 }
 ?>
 <table><tr><td>YEAR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MONTH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</TD><TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AMOUNT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</TD><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DATE</td></tr>
 
 
 
 <?php
 
while($row2 = mysql_fetch_array($result2))
{
echo "<tr><td>";
echo  $row2['year'];
echo "</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo  $row2['month'];
echo "</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo  $row2['amount'];
echo "</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo  $row2['date'];

echo "</td></tr>";

}
 
 echo "</table>";
 
 

}
}