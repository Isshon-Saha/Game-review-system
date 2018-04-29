<?php
session_start();
require("db_conn.php");
if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="success" && isset($_COOKIE['name']) && isset($_COOKIE['pass'])){
        $name=$_POST["username"];
        $sql="Delete from user_info where U_name='".$name."'";
        $res=updateDB($sql);
        header("Location:admin_panel.php");
}
else {
  echo "You need lo log in first";
}
?>
