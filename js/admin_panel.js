function chk1()
{
  debugger;
  var flag=true;
  var l=document.forms[0].elements[0].value.length;
  var le=document.forms[0].elements[1].value.length;
  var lep=document.forms[0].elements[1].value;
  var hint=document.getElementById("hint1").innerHTML;
  var lp=document.forms[0].elements[2].value.length;
  var p=document.forms[0].elements[2].value;
  if(l==0){
    document.getElementById("hint1").style.visibility="visible";
    document.getElementById("hint1").innerHTML="Username field empty";
    flag=false;
  }
  else if(le==0){
    document.getElementById("hint2").style.visibility="visible";
    document.getElementById("hint2").innerHTML="Password field empty";
    flag=false;
  }
  else if(p.search(".com")==-1)
  {
    document.getElementById("hint3").style.visibility="visible";
    document.getElementById("hint3").innerHTML="Invalid email";
    flag=false;
  }
  else if(lp==0){
    document.getElementById("hint3").style.visibility="visible";
    document.getElementById("hint3").innerHTML="Email field empty";
    flag=false;
  }
  else if (le<6) {
    document.getElementById("hint2").style.visibility="visible";
    document.getElementById("hint2").innerHTML="Enter atleast 6 characters";
    flag=false;

  }
  else if (hint=="name already exists") {
    flag=false;
  }
  else if(flag==true)
  {
    document.getElementById("hint5").style.visibility="visible";
    document.getElementById("hint5").innerHTML="Registration Successful";
  }
  if(flag==false)
  {
    document.getElementById("hint5").style.visibility="visible";
    document.getElementById("hint5").innerHTML="Please fillup the form correctly";
  }
  return flag;
  }

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
				/*if(xmlhttp.responseText=="name already exists")
				{
					document.getElementById("namefield").value="";
				}*/
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

function chk2()
{
  debugger;
  var flag=true;
  var nl=document.forms[1].elements[0].value.length;
  var pl=document.forms[1].elements[1].value.length;
  var el=document.forms[1].elements[2].value.length;

  if(nl==0 && pl==0 && el==0)
  {
    alert("No input found");
    flag=false;
  }
  else if (nl==0) {
    alert("Enter name please");
    flag=false;
  }
  if (el !=0) {
    var e=document.forms[1].elements[2].value;
    if(e.search("@")==-1 || e.search(".com")==-1)
    {
      alert("Invalid email format");
      flag=false;
    }
  }
  return flag;
}

function chk3()
{
  debugger;
  var flag=true;
  var nl=document.forms[2].elements[0].value.length;
  if(nl==0)
  {
    alert("name field empty");
    flag=false;
  }

  return flag;
}

function chk4()
{
  debugger;
  var flag=true;
  var gl=document.forms[3].elements[0].value.length;
  var gel=document.forms[3].elements[1].value.length;
  var tl=document.forms[3].elements[2].value.length;
  var dl=document.forms[3].elements[3].value.length;
  if(gl==0)
  {
    alert("name field empty");
    flag=false;
  }
  else if(gel==0)
  {
    alert("genre field empty");
    flag=false;
  }
  else if(tl==0)
  {
    alert("Tag field empty");
    flag=false;
  }
  else if(dl==0)
  {
    alert("Description field empty");
    flag=false;
  }
  return flag;
}

function chk5()
{
  debugger;
  var flag=true;
  var gl=document.forms[4].elements[0].value.length;
  var gel=document.forms[4].elements[1].value.length;
  var tl=document.forms[4].elements[2].value.length;
  var dl=document.forms[4].elements[3].value.length;
  if(gl==0 && gel==0 && tl==0 && dl==0)
  {
    alert("No input found");
    flag=false;
  }
  else if (gl==0) {
    alert("Enter name please")
  }

  return flag;
}

function chk6()
{
  debugger;
  var flag=true;
  var gl=document.forms[5].elements[0].value.length;

  if(gl==0)
  {
    alert("name field empty");
    flag=false;
  }
  return flag;
}

function chk7()
{
  debugger;
  var flag=true;
  var nl=document.forms[6].elements[0].value.length;
  if(nl==0)
  {
    alert("name field empty");
    flag=false;
  }

  return flag;
}

function chk8()
{
  debugger;
  var flag=true;
  var nl=document.forms[7].elements[0].value.length;
  if(nl==0)
  {
    alert("name field empty");
    flag=false;
  }

  return flag;
}


function openCity(evt, cityName) {
  debugger;
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

$(document).ready(
  function()
  {
    $(".tablinks").mouseenter(
      function()
      {
        $(".tablinks").css("color","red");
      }
    )
  }
)
