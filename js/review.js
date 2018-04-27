function chk()
{
  debugger;
  var flag=true;
  var rl=10;
  var rl=document.getElementById("myTextarea").value.length;
  if(rl==1)
  {
    alert("review field empty");
    flag=false;
  }
  return flag;
}
