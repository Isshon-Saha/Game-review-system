<?php
session_start();
require("db_conn.php");
$name=$_POST["gamename"];
$genre=$_POST["genre"];
$tags=$_POST["tags"];
$description=$_POST["Description"];
$all_cool=true;
if(isset($name) && isset($genre) && isset($tags) && isset($description)){
  if(strlen(trim($name)) < 1 || strlen(trim($genre)) < 1 || strlen(trim($tags)) < 1 || strlen(trim($description)) < 1 ){
    echo "<h3 style='color: red'>Please Enter Valid Data</h3>";
    $all_cool = false;
  }
}
if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="success" && isset($_COOKIE['name']) && isset($_COOKIE['pass']) && $all_cool){

        $sql="insert into game_bank( G_name,G_genre,tags,game_info ) values( '".$name."','".$genre."','".$tags."','".$description."' )";
        $res=updateDB($sql);
        echo $res;
        header("Location:admin_panel.php");
}
else {
  echo "You need lo log in first";
}
?>
