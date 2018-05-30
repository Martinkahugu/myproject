

<html>
<head>
<title></title></head><body>
<?php
$test1=$_REQUEST['pas1'];
$test2=$_REQUEST['pas2'];
$connect=mysql_connect("localhost:3306","root","");
if(!$connect)
{
die('no connection established'.mysql_error());
}
mysql_select_db("grandsons",$connect);
if($test1==$test2)
{
$sql = "UPDATE admin SET password='$test1' WHERE username='admin'";
$result=mysql_query($sql,$connect)or die('query failed');
if ($result) {
   ?>
<script language="javascript">

window.confirm("password changed successfully, you can now login");
onconfirm=window.open("admings.php", "_self");
</script>

<?php

}

 else {
    echo "Error updating record: " . $connect->error;
}
}
else
{
?>
<script language="javascript">

window.confirm("password mismatch");
onconfirm=window.open("admings.php", "_self");
</script>

<?php
}

?>




</body></html>