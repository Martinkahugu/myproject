<html><head>
<title>group members
</title>


    
	<style>
	.pic{
	 -moz-border-radius:6px;
    -webkit-border-radius:6px;
    border-radius:6px;
    overflow:hidden;
	
	}
	#wrapper{
	 width:90%;
	height:100%;
    margin:auto;
    padding-bottom:20px;
	background-color:#FFFFFF;
    -moz-border-radius:25px;
    -webkit-border-radius:25px;
    border-radius:25px;
    overflow:hidden;
	}
	body {
    color:#574c37;
    font-family:carbel,'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size:16px;
    background-color:#0066FF;
}
	</style>
</head>
<body>





<div id="wrapper">
<font size="+2" color="#000033">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GROUP MEMBERS</font>





<font>
<table ><tr><td width="10%">MEMBERSHIP NUMBER</td><td width="15%">&nbsp;&nbsp;&nbsp;FULL NAME</td><td width="15%">GENDER</td><td width="15%">CONTACT</td><td width="15%">NATIONAL ID</td><td width="15%">EMAIL</td><td width="15%">PHOTO</td></tr></font>
<font color="#000000">

<?php
session_start();

$connect=mysql_connect("localhost:3306","root","");
if(!$connect)
{
die('no connection established'.mysql_error());
}
mysql_select_db("grandsons",$connect);

$sql="SELECT * FROM members";


$result=mysql_query($sql,$connect)or die('query failed');


while($row = mysql_fetch_array($result))
{  

$id=$row['id'];
$photo=$row['picture'];

echo "<tr><td width='15%'>";


?>

<tr>
<td width="10%">
<?php echo $row['memberid'];?>
</td><td width="15%">
<?php                   
echo $row['fullname'];?>
</td>
<td width="15%">
<?php echo $row['gender'];?>

</td><td width="15%">
<?php echo $row['phone'];?>

</td><td width="15%">
<?php echo $row['nationalid'];?>

</td><td width="15%">
<?php echo $row['email'];?>

</td>
<td width="15%"><?php
echo ("<img src='http://localhost/grandsons/projectpics/%20$photo' width=50 height=50 class='pic' align='center'>");
?>
</td>










<?php	

																																				


}

?>







</tr></table>






</font>



</div>




</body>










</html>
