function chk1()
{
  debugger;
  var flag=true;
  var nl=document.forms[0].elements[0].value.length;
  var pl=document.forms[0].elements[1].value.length;
  var el=document.forms[0].elements[2].value.length;
  if(nl==0)
  {
    alert("name field empty");
    flag=false;
  }
  if(pl==0)
  {
    alert("password field empty");
    flag=false;
  }
  if(el==0)
  {
    alert("email field empty");
    flag=false;
  }

  return flag;
}

function chk2()
{
  debugger;
  var flag=true;
  var nl=document.forms[1].elements[0].value.length;
  var pl=document.forms[1].elements[1].value.length;
  var el=document.forms[1].elements[2].value.length;
  if(nl==0)
  {
    alert("name field empty");
    flag=false;
  }
  if(pl==0)
  {
    alert("password field empty");
    flag=false;
  }
  if(el==0)
  {
    alert("email field empty");
    flag=false;
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
  if(gel==0)
  {
    alert("genre field empty");
    flag=false;
  }
  if(tl==0)
  {
    alert("Tag field empty");
    flag=false;
  }
  if(dl==0)
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
  if(gl==0)
  {
    alert("name field empty");
    flag=false;
  }
  if(gel==0)
  {
    alert("genre field empty");
    flag=false;
  }
  if(tl==0)
  {
    alert("Tag field empty");
    flag=false;
  }
  if(dl==0)
  {
    alert("Description field empty");
    flag=false;
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


function openCity(evt, cityName) {
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
