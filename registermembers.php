<?php
if ($_FILES['picture']['error'])
{
echo ("");
}
else
{
file_get_contents($_FILES['picture']['tmp_name']);
$picture=$_FILES['picture']['name'];
$temp=$_FILES['picture']['tmp_name'];
$ext=pathinfo($picture,PATHINFO_EXTENSION);
$location=move_uploaded_file($temp,'C:\wamp\www\grandsons\projectpics\ '.$picture);
}

$conn=mysql_connect("localhost:3306","root","");
if(!$conn)
{
die('could not connect:'.mysql_error());
}

mysql_select_db("grandsons",$conn);
$sql="INSERT INTO members(memberid,fullname,gender,phone,nationalid,email,picture)
VALUES('$_POST[memberid]','$_POST[fullname]','$_POST[gender]','$_POST[phone]','$_POST[idnum]','$_POST[email]','$picture')";
if(!mysql_query($sql,$conn))
{
die('could not insert'.mysql_error());
}

else
{
?>
<script language="javascript">

window.confirm("membership registration successfull, you may register another if you are not done");
onconfirm=window.open("newmembers.php", "_self");
</script>

<?php
}

mysql_close($conn);
?>
