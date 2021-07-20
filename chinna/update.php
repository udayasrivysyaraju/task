<body style="background-color:#97C1A9;">
<?PHP $i = $_GET['i']; ?>
<div align="center" style="border:2px solid black;width:25%;margin:0 auto;margin-top:200px;background-color:#B6CFB6;">
	<form action="" method="POST">
		<h2>NEW DETAILS</h2>
		<div >
		<input type="Hidden" name="id" value="<?PHP echo $i; ?>">
		<div>
		<div style="padding:5px;text_align:center;">
		<input type="text" name="name" placeholder="enter name">
		</div>
		<br><br>
		<div style="padding:5px;text_align:center;">
		<input type="text" name="address" placeholder="enter address">
		</div>
		<br><br>
		<div style="padding:5px;text_align:center;">
		<input type="number" name="salary" placeholder="enter salary">
		</div>
		<br><br>
		<div style="padding:5px;text_align:center;">
		<input type="submit" name="up" value="UPDATE NOW">
		</div>
	</form>
</div>	
<?PHP
	if(isset($_POST['up']))
	{
		$con = mysqli_connect("localhost","root","","udaya");
		$id = $_POST['id'];
		$name=$_POST['name'];
		$address=$_POST['address'];
		$salary=$_POST['salary'];
		
		mysqli_query($con,"update details set name='$name',address='$address',salary='$salary' where id='$id'");
		
		header("location:fetch.php");
	}

?>