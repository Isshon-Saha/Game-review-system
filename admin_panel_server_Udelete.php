<?php
session_start();
require("db_conn.php");
$name=$_POST["username"];
$all_cool=true;
if(isset($name)){
  if(strlen(trim($name)) < 1  ){
    echo "<h3 style='color: red'>Please Enter Valid Data</h3>";
    $all_cool = false;
  }
}

if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="success" && isset($_COOKIE['name']) && isset($_COOKIE['pass']) && $all_cool){

        $sql="Delete from user_info where U_name='".$name."'";
        $res=updateDB($sql);
        $sql="Drop table ".$name."";
        $res=updateDB($sql);
        header("Location:admin_panel.php");
}
else {
  echo "You need lo log in first";
}
?>
