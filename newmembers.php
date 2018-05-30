<html>
<head><title>new members
</title>
 <link rel="stylesheet" href="styles/style1.css" type="text/css" />
<style>



table.content3{border:2px solid #ff00cc;
background-color:#00FF33;
border-top-left-radius:4px;
padding:4px;
border-bottom-right-radius:4px;
border-top-right-radius:4px;
border-bottom-left-radius:4px;
-moz-border-top-left-radius:4px;
-moz-border-top-right-radius:4px;
-moz-border-bottom-left-radius:4px;
-moz-border-bottom-right-radius:4px;
-webkit-border-top-left-radius:4px;
-webkit-border-top-right-radius:4px;
-webkit-border-bottom-left-radius:4px;
-webkit-border-bottom-right-radius:4px;}
#table3{
margin-left:2%;
height:100%;
width:100%;}
body {
    color:#574c37;
    font-family:carbel,'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size:16px;
    background-color:#0066FF;
}
#wrapper{
    width:60%;
	height:100%;
    margin:auto;
    padding-bottom:20px;
    background-color:white;
    -moz-border-radius:25px;
    -webkit-border-radius:25px;
    border-radius:25px;
    overflow:hidden;
	
     
}
#delete{
float:LEFT;
width:30%;
background-color:#FFFFFF;
}
</style>
<script language="javascript">
function back(i)
{
if(i.value=="")
{
i.value=i.defaultValue;
i.style.color="#888888";
}
}
</script>
<script language="javascript">
function erase(i)
{
if(i.value==i.defaultValue)
{
i.value="";
i.style.color="#000000";
}
}

</script>
 
</head>
<body>
 <div id="navigation" align="justify">

                <ul id="nav">
                    <li><a href="admings.php">HOME</a></li>
                    <li><a href="newmembers.php">new members</a></li>
                    <li><a href="viewmembers.php">view members details</a></li>
                    <li><a href="contribution.php">enter members contribution</a></li>
					   <li><a href="print.php">print members records</a></li>
					     
                </ul>
            </div>
<div id="delete">
delete member records by MEMBER ID
<form action="delete.php" method="post">
member id<input type="text" name="mnumber" required /><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="remove2" value="Delete member records" /></form>
</div>
<div id="wrapper">

<div id="table1">
<form name="registration"  method="post" action="registermembers.php" enctype="multipart/form-data">

<table align="left" class="content3" cellspacing="0" cellpadding="3">
<tr>
<td align="center"><b><u>enter new member's details</td></b></u>
</u>
<tr>
<td align="left"><label class="fields" for="fname"></label><input type="text" name="memberid" value="  ENTER MEMBER ID" onFocus="erase(this)" onBlur="back(this)" size="30" style="color:#888;height:30px;font-size:16pt;" required/>
</td>
</tr>
<tr>
<td><label class="fields" for="lname"></label><input type="text" value="  ENTER MEMBERS FULL NAME" onFocus="erase(this)" onBlur="back(this)" name="fullname" size="30" style="color:#888;height:30px;font-size:16pt;" required/>
</td>
</tr>
<tr>
<td>GENDER
</td>
<td><TR><TD><input type="radio" name="gender" value="male"/>MALE</TD></TR><TR><TD><input type="radio" name="gender" value="female" />FEMALE</TD></TR>
</td>
</tr>
<tr>
<td><label class="fields" for="pnumber"></label><input type="text" value=" ENTER MEMBERS PHONE" onFocus="erase(this)" onBlur="back(this)" name="phone" size="30" style="color:#888;height:30px;font-size:16pt; "required/>
</td>
</tr>
<tr>
<td align="left"><b><br><input type="text" name="idnum" id="username" value="ENTER NATIONAL ID" onFocus="erase(this);empty2()" onBlur="back(this);check()" size="30" style="color:#888;height:30px;font-size:16pt;" required/></b>
</td>
</tr><tr>
<td align="left"><b><br><input type="text" name="email" id="username" value="ENTER EMAIL" onFocus="erase(this);empty2()" onBlur="back(this);check()" size="30" style="color:#888;height:30px;font-size:16pt;" /></b>
</td>
</tr>
<tr>
<td align="center">
<font color="red"><div id="main" ></div></font>
</td>
</tr>

<tr>
<td align="center"><b>members picture<br><input type="file" name="picture" id="file" ></b>
</td>
</tr>
<tr>
<td rowspan="2"><input type="submit" name="submit" value="REGISTER">
</td><TD><td align="center" rowspan="2"><input type="reset" name="reset" value="CANCEL"></TD>
</tr>
</form>
</div>
</div>
</body></html>