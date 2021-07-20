<?PHP

$con = mysqli_connect("localhost","root","","udaya");
$s = mysqli_query($con,"select * from details");
?>
<div style="border:2px solid black;height:500px;width:600px;margin-left:400px;margin-top:50px;background-color:pink;">
<h1 style="text-align:center;">EMPLOYEE DETAILS:</h1>
<table border=2 align="center" style="margin-top:100px;background-color:white;width:550px;height:200px;">
	<tr>
		<th>#</th>
		<th>Name</th>
		<th>Address</th>
		<th>Salary</th>
		<th>Remove</th>
		<th>Edit</th>
	</tr>
<?PHP

while($r = mysqli_fetch_array($s))
{
?>	
	
	<tr>
		<td><?PHP echo $r['id']; ?></td>
		<td><?PHP echo $r['name']; ?></td>
		<td><?PHP echo $r['address']; ?></td>
		<td><?PHP echo $r['salary']; ?></td>
		<td align="center"><a href="del.php?i=<?PHP echo $r['id'];?>"><img src="/chinna/delete1.jpg" width="30" height="30"></a></td>
		<td align="center"><a href="update.php?i=<?PHP echo $r['id'];?>"><img src="/chinna/edit.png" width="30" height="30"></a></td>
	</tr>
		
<?PHP
}
?>
</table>
</div>