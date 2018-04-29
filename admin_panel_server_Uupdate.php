<?php
session_start();
require("db_conn.php");
if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="success" && isset($_COOKIE['name']) && isset($_COOKIE['pass'])){
        $name=$_POST["gamename"];
        $genre=$_POST["genre"];
        $tags=$_POST["tags"];
        $description=$_POST["Description"];
        $sql="update game_bank set G_genre='".$genre."',tags='".$tags."',game_info='".$description."' where G_name='".$name."'";
        $res=updateDB($sql);
        header("Location:admin_panel.php");
}
else {
  echo "You need lo log in first";
}
?>
