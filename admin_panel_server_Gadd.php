<?php
session_start();
require("db_conn.php");
if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="success" && isset($_COOKIE['name']) && isset($_COOKIE['pass'])){
        $name=$_POST["gamename"];
        $genre=$_POST["genre"];
        $tags=$_POST["tags"];
        $description=$_POST["Description"];
        $sql="insert into game_bank( G_name,G_genre,tags,game_info ) values( '".$name."','".$genre."','".$tags."','".$description."' )";
        $res=updateDB($sql);
        echo $res;
        header("Location:admin_panel.php");
}
else {
  echo "You need lo log in first";
}
?>
