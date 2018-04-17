<?php
ob_start();

?>
<h1>It's server's area</h1>
<?php
//echo "<pre>";print_r($GLOBALS);echo "</pre>";
$auth=array();
require("db_conn.php");
$s="select U_name,U_pass from user_info";
$jsn=getJSONFromDB($s);
$jd=json_decode($jsn);
echo print_r($jd);
foreach($jd as $dt)
{
	$auth[(string)$dt->U_name]=(string)$dt->U_pass;
}
//$auth=array("raju"=>"123","mina"=>"321","mithu"=>"456");
$u=$_REQUEST['name'];
$p=$_REQUEST['pass'];
//echo $u;
session_start();
$_SESSION["flag"]="";
if(isset($auth[$u]) && $auth[$u]==md5($p)){
	//echo "Hello ".$u;
    setcookie("name",$u,time()+5000);
    setcookie("pass",$p,time()+3000);
    $_SESSION["flag"]="success";
	header("Location: homepage.php?"); 
}
else{
	//echo "I can't recognize you";
    $_SESSION["flag"]="fail";
	header("Location: index.php?");
}
ob_flush();
?>