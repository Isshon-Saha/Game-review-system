<?php
session_start();
require("db_conn.php");
$name=$_POST["username"];
if(isset($_POST["password"]))
{
  $password=md5($_POST["password"]);
}
if(isset($_POST["email"]))
{
  $email=$_POST["email"];
}


$all_cool=true;
/*if(isset($name) && isset($email) && isset($password)){
  if(strlen(trim($name)) < 1 || strlen(trim($email)) < 1 || strlen(trim($password)) < 1 ){
    echo "<h3 style='color: red'>Please Enter Valid Data</h3>";
    $all_cool = false;
  }
  if(!strpos($email, '@')){
    echo "<h3 style='color: red'>Please Enter A Valid Email Address</h3>";
    $all_cool = false;
  }

  if(strlen(trim($password)) < 6){
    echo "<h3 style='color: red'>Password length should be more than 6 characters</h3>";
    $all_cool = false;
  }
}*/
if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="success" && isset($_COOKIE['name']) && isset($_COOKIE['pass']) && $all_cool)
{
  if (isset($_POST["password"]) && $_POST["password"]!="") {
    $sql="update user_info set U_pass='".$password."' where U_name='".$name."'";
    $res=updateDB($sql);
  }
  print_r($_POST["email"]);
  if (isset($_POST["email"]) && $_POST["email"]!="")
  {
    $sql="update user_info set U_email='".$email."' where U_name='".$name."'";
    $res=updateDB($sql);
  }
        header("Location:admin_panel.php");
}
else {
  echo "You need lo log in first";
}
?>
