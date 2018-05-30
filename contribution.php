<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>contribution </title>


<style>

#body{
margin-left:20%;
margin-right:10%;
margin-top:10%;
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    border-radius:5px;
    overflow:hidden;
	background-color:#CCCCCC;
	width:70%;
	height:80%;
     
}
body{background-color:#0000CC;
}

</style>
 <link rel="stylesheet" href="styles/style1.css" type="text/css" />
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
<div id="body">
<form action="submitcontribution.php" method="post">
<table> 
<tr>
<td>MEMBERS ID</td><td><input type="text" name="memberid" required/></td>
</tr>
<tr>
<td>YEAR</td><td><select name="year">

<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
<option value="2023">2023</option>
<option value="2024">2024</option>
<option value="2025">2025</option>
<option value="2026">2026</option>
<option value="2027">2027</option>
<option value="2028">2028</option>
<option value="2029">2029</option>
<option value="2030">2030</option>
<option value="2031">2031</option>
<option value="2032">2032</option>
<option value="2033">2033</option>
<option value="2034">2034</option>
<option value="2035">2035</option>
<option value="2036">2036</option>
<option value="2037">2037</option>
<option value="2038">2038</option>
<option value="2039">2039</option>
<option value="2040">2040</option>


</select>



</td>
</tr>
<tr>
<td>MONTH</td><td><select name="month">
<option name="january">JANUARY</option>
<option name="february">FEBRUARY</option>
<option name="march">MARCH</option>
<option name="pril">APRIL</option>
<option name="maay">MAY</option>
<option name="june">JUNE</option>
<option name="july">JULY</option>
<option name="august" selected="selected">AUGUST</option>
<option name="september">SEPTEMBER</option>
<option name="octomber">OCTOMBER</option>
<option name="november">NOVEMBER</option>
<option name="december">DECEMBER</option>

</select></td>
</tr>
<tr>
<td>AMOUNT</td><td><input type="text" name="amount"/></td>
</tr>
<tr><td><input type="submit" name="enter" value="ENTER CONTRIBUTION"/></td><td><input type="reset" value="CANCEL"/></td></tr>





</table>



</form>




</div>

</body>
</html>
