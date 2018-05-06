<?php
session_start();
require("db_conn.php");
$name=$_POST["gamename"];
if(isset($_POST["genre"]))
{
  $genre=$_POST["genre"];
}
if(isset($_POST["tags"]))
{
  $tags=$_POST["tags"];
}
if(isset($_POST["Description"]))
{
  $description=$_POST["Description"];
}

$all_cool=true;
/*if(isset($name) && isset($genre) && isset($tags) && isset($description)){
  if(strlen(trim($name)) < 1 || strlen(trim($genre)) < 1 || strlen(trim($tags)) < 1 || strlen(trim($description)) < 1 ){
    echo "<h3 style='color: red'>Please Enter Valid Data</h3>";
    $all_cool = false;
  }
}*/
if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="success" && isset($_COOKIE['name']) && isset($_COOKIE['pass']) && $all_cool)
{
if(isset($_POST["genre"]) && $_POST["genre"]!="")
{
  $sql="Update game_bank set G_genre='".$name."' where G_name='".$genre."'";
  $res=updateDB($sql);
}
if(isset($_POST["tags"]) && $_POST["tags"]!="")
{
  $sql="Update game_bank set tags='".$tags."' where G_name='".$genre."'";
  $res=updateDB($sql);
}
if(isset($_POST["Description"]) && $_POST["Description"]!="")
{
  $sql="Update game_bank set game_info='".$description."' where G_name='".$genre."'";
  $res=updateDB($sql);
}
header("Location:admin_panel.php");
}
else {
  echo "You need lo log in first";
}
?>
