function validatelogin()
{
var x=document.forms["login"]["uname"].value;
var y=document.forms["login"]["upass"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Incorrect User Id");
  document.login.uname.focus() ;
  return false;
  }
if (y==null || y==""||y<3)
  {
  alert("Incorrect Password");
  document.login.upass.focus() ;
  return false;
  }
  }