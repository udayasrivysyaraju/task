<?PHP

$id=$_GET['i'];

$con = mysqli_connect("localhost","root","","udaya");
mysqli_query($con,"delete from details where id='$id'");

header("localhost:fetch.php");
?>