<?php
  require("db_conn.php");
  if(isset($_POST["username"]))
  {
	$username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST['password'];
    $confirm_password = $_POST["confirm_password"];
    $all_cool = true;
  }
  if(isset($_GET["uname"]))
  {
	  $uname=$_GET["uname"];
	  $s="select U_name from user_info where U_name='".$uname."'";
	  $jsn=getJSONFromDB($s);
	  if(strlen($jsn)>=3)
	  {
		  echo "name already exists" ;
	  }
	  else
	  {
		  echo "ok";
	  }
  }
  if(isset($username) && isset($email) && isset($password) && isset($confirm_password)){
    if(strlen(trim($username)) < 1 || strlen(trim($email)) < 1 || strlen(trim($password)) < 1  || strlen(trim($confirm_password)) < 1){
      echo "<h3 style='color: red'>Please Enter Valid Data</h3>";
      $all_cool = false;
    }
    if(!strpos($email, '@')){
      echo "<h3 style='color: red'>Please Enter A Valid Email Address</h3>";
      $all_cool = false;
    }
    if($password !== $confirm_password){
      echo "<h3 style='color: red'>Password Mismatch!</h3>";
      $all_cool = false;
    }

    if(strlen(trim($password)) < 6){
      echo "<h3 style='color: red'>Password length should be more than 6 characters</h3>";
      $all_cool = false;
    }

    if(!$all_cool){
      echo "<a href='./registration.php'>Go Back</a>";
    }

    if($all_cool){
      // file stuffs Here
      /*$my_file = 'record.txt';
      $handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file); ;
      $data = "\n\r".$username." ".$password;
      fwrite($handle, $data);*/

	  $password=md5($password);
	  $s="insert into user_info(U_name,U_pass,U_email) values('".$username."','".$password."','".$email."')";
	  $res=updateDB($s);
      echo "<h3 style='color: blue'> Registration Successful!!</h3>";
      echo "<a href='.'>Home</a>";
      $s="Create table ".$username." (genre text, counter int(11))";
      $res=updateDB($s);
      $s="insert into ".$username." values('RPG',0)";
      $res=updateDB($s);
      $s="insert into ".$username." values('Racing',0)";
      $res=updateDB($s);
      $s="insert into ".$username." values('Strategy',0)";
      $res=updateDB($s);
      $s="insert into ".$username." values('Action',0)";
      $res=updateDB($s);
      $s="insert into ".$username." values('Puzzle',0)";
      $res=updateDB($s);
      header("Location:registration.php");
    }
  }



 ?>
