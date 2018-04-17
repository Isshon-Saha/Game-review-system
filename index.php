<script type="text/javascript">
function chk(){
	var flag=true;
	var l=document.forms[0].elements[0].value.length;
	var lp=document.forms[0].pass.value.length;
	if(l==0){
		alert("Username empty");
		flag=false;
	}
	else if(lp==0){
		alert("password empty");
		flag=false;
	}
	return flag;
}
</script>
<style>
.button {
    background-color:  #555555;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 3px 2px;
    cursor: pointer;
}
<?php session_start(); ?>
</style>
<form action="check.php" method="post" style="text-align:center">
<br/><h1><font  face="verdana" size="7">Enter your Info</font></h1><br/><br/><br/><br/><br/><br/>

<body bgcolor="#E6E6FA">
<font  face="verdana">User Name :</font>
<input value="" type="text" name="name" " /><br><br/>
<font  face="verdana">Password  :</font> <input type="password" name="pass" /><br>
<br><br/>
<input type="submit" value="Login" class="button" onclick="return chk()"/>
<a href="registration.php">Register</a> <br>
<?php

if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="fail"){
echo "<span style='color:red'> Login failed </span>";
$_SESSION["flag"]="";

}
?>
</body>

</form>