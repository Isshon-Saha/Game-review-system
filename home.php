<?php ob_start() ?>
<h1>Welcome to the System</h1>
<?php
if($_GET["m"]=="12345"){
	echo "Your private message : '017110000'";
	echo "<br><a href='logout.php'>Logout</a>";
}
else{
	header("Location:index.html");
}
ob_flush();
?>