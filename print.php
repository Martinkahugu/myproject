<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>search and print</title>
<style>
#search{
margin-left:10%;


}
#print{
background-color:#99FFCC;
border:dashed;
border-color:#000033;
margin:2%;

}
body {
    color:#574c37;
    font-family:carbel,'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size:16px;
    background-color:#0066FF;
}
#wrapper{
    width:90%;
	height:500px;
    margin:auto;
    padding-bottom:20px;
    background-color:white;
    -moz-border-radius:25px;
    -webkit-border-radius:25px;
    border-radius:25px;
    overflow:hidden;
	
     
}
#navigation{
   
	font-style:oblique;
	background-color:#00FF99;
	-moz-border-radius:25px;
    -webkit-border-radius:25px;
    border-radius:10px;
    overflow:hidden;
	text-align:center;
}
</style>


</head>

<body background="projectpics/nature.jpg">

 <div id="navigation" align="justify">

                <ul id="nav">
                    <li><a href="admings.php">HOME</a></li>
                    <li><a href="newmembers.php">new members</a></li>
                    <li><a href="viewmembers.php">view members details</a></li>
                    <li><a href="contribution.php">enter members contribution</a></li>
					   <li><a href="print.php">print members records</a></li>
					     
                </ul>
            </div> 
<div id="wrapper"><font color="#000099" size="+2">
search members by  membership number</font>


<div id="search">
<table><tr>
<td><font color="#FF0000">(just view)</font>SEARCH ONE MEMBER'S RECORDS</td><TD><form action="printnow.php" method="post">
<input type="text"name="mnumber"/> <input type="submit" name="searchid" value="SEARCH........" width="20px" /></form></TD>
</tr>

<tr></tr><tr></tr><tr></tr><BR /><BR />
<tr><td><BR /><BR /><font color="#FF0000">(just view)</font>SEARCH RECORDS OF A MEMBER IN ONE YEAR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><BR /><BR /><form action="search.php" method="post">MEMBER ID<input type="text" name="id" />YEAR<select name="year">

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




<input type="submit" name="showone" value="SEARCH........."/></form></td></tr></table> 
</div><div id="print">
<table><tr>
<td><font color="#FF0000">(PRINT ONLY)</font>SEARCH ONE MEMBER'S RECORDS</td><TD><form action="printnow2.php" method="post">
<input type="text"name="mnumber"/> <input type="submit" name="searchprint" value="SEARCH........" width="20px" /></form></TD>
</tr>

<tr></tr><tr></tr><tr></tr><BR /><BR />
<tr><td><BR /><BR /><font color="#FF0000">(PRINT ONLY)</font>SEARCH RECORDS OF A MEMBER IN ONE YEAR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><BR /><BR /><form action="printone.php" method="post">MEMBER ID<input type="text" name="id" />YEAR<select name="year">

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




<input type="submit"  value="SEARCH........." name="printoneb"/></form></td></tr></table> 


</div>

</div>
</body>
</html>
