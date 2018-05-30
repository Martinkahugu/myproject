
<?php
if(isset($_REQUEST["submit"]))
{
$conn=@mysql_connect('localhost','root','');
if(!$conn) 
{
die('Database connection was not possible!');
}
$select=@mysql_select_db('grandsons');
if(!$select)
{
die('The selection was not possible!');
}
$data=@mysql_query("SELECT * FROM admin");
if(!$data)
{
die("Selection from your table has failed!!!!!!!!");
}
$count=@mysql_numrows($data);
}
?>
<?php while($values=mysql_fetch_array($data)): ?> 
<?php if($values['username']==$_REQUEST['user'] and $values['password']==$_REQUEST['pass']): ?>



<script language="javascript">
window.open("homepage.php", "_self");
</script>

<?php else: ?>
<?php
?>
<script language="javascript">

window.confirm("wrong password");
onconfirm=window.open("admings.php", "_self");
</script>

<?php
?>
<?php endif; ?>
<?php endwhile; ?>