<?php
session_start();
require("db_conn.php");
if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="success" && isset($_COOKIE['name']) && isset($_COOKIE['pass'])){
        $name=$_POST["username"];
        $password=md5($_POST["password"]);
        $email=$_POST["email"];

        $sql="insert into user_info( U_name,U_pass,U_email ) values( '".$name."','".$password."','".$email."')";
        $res=updateDB($sql);
        echo $res;
        header("Location:admin_panel.php");
}
else {
  echo "You need lo log in first";
}
?>
