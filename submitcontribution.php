<?php
$date=date("y/m/d");
$conn=mysql_connect("localhost:3306","root","");
if(!$conn)
{
die('could not connect:'.mysql_error());
}

mysql_select_db("grandsons",$conn);
$sql="INSERT INTO contribution(memberid,year,month,amount,date)
VALUES('$_POST[memberid]','$_POST[year]','$_POST[month]','$_POST[amount]','$date')";
if(!mysql_query($sql,$conn))
{
die('could not insert'.mysql_error());
}

else
{
?>
<script language="javascript">

window.confirm("contribution entry successfull");
onconfirm=window.open("contribution.php", "_self");
</script>

<?php
}

mysql_close($conn);
?>
