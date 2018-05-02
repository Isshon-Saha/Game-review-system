<?php
session_start();
require("db_conn.php");
$name=$_POST["gamename"];
$all_cool=true;
if(isset($name) ){
  if(strlen(trim($name)) < 1  ){
    echo "<h3 style='color: red'>Please Enter Valid Data</h3>";
    $all_cool = false;
  }
}
if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="success" && isset($_COOKIE['name']) && isset($_COOKIE['pass']) && $all_cool){

        $sql="update game_bank set Editors_choice=NULL where G_name='".trim($_POST["gamename"])."'";
        $res=updateDB($sql);
        header("Location:admin_panel.php");
}
else {
  echo "You need lo log in first";
}
?>
