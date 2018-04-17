<?php
session_start();
$_SESSION["flag"]="";
setcookie("pass","123",time()-20);
setcookie("name","",time()-20);
header("Location:index.php");
?>