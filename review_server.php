<?php
ob_start();
require("db_conn.php");
$selection=$_POST["selection"];
$text=$_POST["text_a"];
$all_cool=true;
if(isset($text)){
  if(strlen(trim($text)) < 1  ){
    echo "<h3 style='color: red'>Please Enter Valid Data</h3>";
    $all_cool = false;
  }
}
if($all_cool)
{
  $sql="insert into descriptions(description,Rating) values('".$text."',".$selection.")";
  updateDB($sql);
  $sql="select desc_ids from game_bank where G_name='".$_GET["title"]."'";
  $res=getDataFromDB($sql);
  foreach ($res as $key) {
    $descs=$key["desc_ids"];
  }
  $arr=explode(",",$descs);
  $count=count($arr)-1;
  $sum=0;
  foreach ($arr as $key) {
    $sql="select Rating from descriptions where desc_id=".(int)$key;
    $sre=getDataFromDB($sql);
    $sum=$sum+$sre["Rating"];
  }
  $rating=$sum/$count;


  $sql="Update game_bank set Rating=".$rating." where G_name='".$_GET["title"]."'";
  $res=updateDB($sql);
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
}


 ?>
