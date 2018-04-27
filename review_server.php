<?php
ob_start();
require("db_conn.php");
$selection=$_POST["selection"];
$text=$_POST["text_a"];
$sql="insert into descriptions(description,Rating) values('".$text."',".$selection.")";
$res=updateDB($sql);
$sql="select desc_ids from game_bank where G_name='".$_GET["title"]."'";
$res=getDataFromDB($sql);
foreach ($res as $key) {
  $descs=$key["desc_ids"];
}
print_r($descs);

ob_flush();

 ?>
