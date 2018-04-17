<?php
function loadArray(){
	global $auth;
	$xml=simplexml_load_file("credentials.xml") or die("Error: Cannot create object");
	foreach($xml->data as $dt)
	{
		$auth[(string)$dt->name]=(string)$dt->password;
	}
}
?>