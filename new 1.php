<?php
include 'databaseconn.php';
if(isset($_POST["submit"]))
{
	$a=$_POST["name"];
	$b=$_POST["age"];

$sql="insert into `table1` (`name`,`age`)values('$a',$b)";
$result=mysqli_query($con,$sql);
}
?>

<html>
<body>
<form action="#" method="POST">
<table border="1">
<tr>
<td>Name</td>
<td><input type="text" name="name"></td>
</tr>
<tr>
<td>Age</td>
<td><input type="text" name="age"></td>
</tr>
<tr>
<td><input type="Submit" name="submit" value="submit"></td>
</tr>
</table>
</form>
</body>
<?php
$ke="select * from table1";
$k=mysqli_query($con,$ke);
while($res=mysqli_fetch_array($k))
{
	echo $res[1];
}
?>
</html>