
<?php
if(isset($_REQUEST['remove2']))
{
$erasor=$_REQUEST['mnumber'];
$connect=mysql_connect('localhost','root','');
if(!$connect) 
{
die('Database connection was not possible!');
}
$select=mysql_select_db('grandsons');
if(!$select)
{
die('Selection of the database was not possible!');
}
else
{
$data=mysql_query("DELETE FROM contribution WHERE memberid=$erasor");

$data2=mysql_query("DELETE FROM members WHERE memberid=$erasor");

}
if($data & $data2)
{
?>
<script language="javascript">

window.confirm("member records deleted successully");
onconfirm=window.open("newmembers.php", "_self");
</script>

<?php 

}
}