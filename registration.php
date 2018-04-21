<!DOCTYPE html>
<script type="text/javascript">
function chk(){
	var flag=true;
	var l=document.forms[0].elements[0].value.length;
	var le=document.forms[0].elements[1].value.length;
	var lp=document.forms[0].elements[2].value.length;
	var lcp=document.forms[0].elements[3].value.length;
	if(l==0){
		alert("Username field empty");
		flag=false;
	}
	else if(le==0){
		alert("email field empty");
		flag=false;
	}
	else if(lp==0){
		alert("password field empty");
		flag=false;
	}
	else if(lcp==0){
		alert("confirm password field empty");
		flag=false;
	}
	return flag;
}
function aj()
{
	var v=document.getElementById("namefield").value;
	var xmlhttp= new XMLHttpRequest()
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("hint1").style.visibility="visible";
			document.getElementById("hint1").innerHTML=xmlhttp.responseText;

		}
	}
	var url="register.php?uname="+v;
	xmlhttp.open("GET", url,true);
	xmlhttp.send();
}
</script>
<html>
<div class="flex-container">
<head>
	<link rel="stylesheet" href="styles.css">
<meta charset="UTF-8">
<div class="content-container">
<title>Registration Page</title>

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

#register_form{
  text-align: -webkit-center;
  line-height: 2.5;
  font-size: large;
}
</style>

<script>
	function testChk (){

		var v=document.getElementById("namefield").value;
		var l=document.getElementById("namefield").value.length;
		var xmlhttp= new XMLHttpRequest()
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
			{
				debugger;
				document.getElementById("hint1").style.visibility="visible";
				document.getElementById("hint1").innerHTML=xmlhttp.responseText;
				if(xmlhttp.responseText=="name already exists")
				{
					document.getElementById("namefield").value="";
				}
				if(l==0)
				{
					document.getElementById("hint1").style.visibility="hidden";
				}

			}
		}
		var url="register.php?uname="+v;
		xmlhttp.open("GET", url,true);
		xmlhttp.send();

	}
</script>
</head>

<body bgcolor="white" style="text-align:center">
  <br/><h1 style="text-align:center"><font  face="verdana" size="7">Register Here</font></h1><br/><br/><br/><br/><br/><br/>
<div class="content">
  <form id="register_form" action="register.php" method="POST">
    <label face="verdana"> Username: </label>
    <input type="text" id="namefield" name="username" placeholder="enter username here" onkeyup="testChk()"/>
	<label face="verdana" id="hint1" style="visibility:hidden"> </label>
    <br/>

    <label face="verdana"> Email: </label>
    <input type="email" name="email" placeholder="enter email here"/>
    <br/>

    <label face="verdana"> Password: </label>
    <input  type="password" name="password" placeholder="enter password here"/>
    <br/>

    <label face="verdana">Confirm Password: </label>
    <input  type="password" name="confirm_password" placeholder="enter password again here"/>
    <br/>

    <input class="button" type="submit" name="submit" value="Register" onclick="return chk()">
    <input type="button" class="button" name="gp_back" value="Go Back" onclick="window.location = '.'"/> <br>
 </form>
</div>
</body>
</div>
</div>

</html>
