<?php
ob_start();
require("db_conn.php");
$selection=$_POST["selection"];
$text=$_POST["text_a"];
$sql="insert into descriptions(description,Rating) values('".$text."',".$selection.")";
updateDB($sql);
$sql="select desc_ids from game_bank where G_name='".$_GET["title"]."'";
$res=getDataFromDB($sql);
foreach ($res as $key) {
  $descs=$key["desc_ids"];
}
$sql="select * from descriptions";
$tre=getDataFromDB($sql);
foreach ($tre as $k) {
  $last=$k["desc_id"];
}
$last++;
$new=(string)$last;
$sql="update game_bank set desc_ids='".$descs.",".$new."' where G_name='".$_GET["title"]."'";
updateDB($sql);
ob_flush();
header("Location:review.php?title=".$_GET["title"]);

 ?>
