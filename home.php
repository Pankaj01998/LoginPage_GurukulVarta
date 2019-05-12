<?php
 session_start();

$_SESSION["edit_upload"]=""; 
// if(!isset($_SESSION['options']))
//  {
//  	header('Location:index.php');
//  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body style="background-color: gray">

	<h2 style="text-align: center">
		Welcome <?php echo $_SESSION['options']; echo "<p> hi </p>";?>
	</h2>

	<form action="index.php" method="post" enctype="multipart/form-data">
		<input type="Submit" name="submit" value="Logout">
		
	</form>
	

	<br>
	<br>
	<form action="upload_form.php" method="post" enctype="multipart/form-data">
		<input style="margin-left: 10%" type="Submit" name="submit" value="Upload Article">
	</form>

	<br>
	<br>
	<form action="addAuthor.php" method="post" enctype="multipart/form-data">
		<input style="margin-left: 10%" type="Submit" name="submit" value="Add Author">
	</form>
	<br>
	<br>
<br>
<form action="ss.php" method="post" enctype="multipart/form-data">
	<input style="margin-left: 10%" type="Submit" name="submit" value="Edit Article">
</form>


</body>
</html>