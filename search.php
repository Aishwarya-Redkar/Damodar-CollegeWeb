<? php
require("conn.inc.php");
?>
<html>
<head>
</head>
<body>
<center><h1><u>Search</u></h1></center>
<form name="search" method="post" action="search.php">
<table style=" border:1px solid silver" cellpadding="5px" cellspacing="0px"
align="center" border="0">
<tr>
<td colspan="3" style="background:#0066FF; color:#FFFFFF; fontsize:
20px">Search</td></tr>
<tr>
<td>Enter Search Keyword</td>
<td><input type="text" name="search" size="40" /></td>
<td><input type="submit" value="Search" /></td>

<? php
$search=$_POST["search"];
$flag=0;
$query="select * from answers where name like '%$search%' ";
$result=mysql_query($query);
while ($row = mysql_fetch_array($result)) {
Search Records:-
$flag=1;
echo "<tr ><td>",$row[0],", ",$row[1],"</td><td><a
href='view.php?roll=",$row[0],"'>",$row[2],", ",$row[3],"</a></td><td><a
href='edit.php?roll=",$row[0],"'>Edit</a> | <a
href='del.php?roll=",$row[0],"'>Delete</a></td></tr>";
}
if($flag==0)
echo "<tr><td colspan='3' align='center' style='color:red'>Record not
found</td></tr>";
?>
<tr>
<td colspan="3">&nbsp;</td></tr>
<tr bgcolor="#CCCCCC">
<th colspan="3" align="right"><a href="add.php">Add Record</a></th>
</tr>
</table>
</form>
</body>
</html>