function validateForm()
{
var x=document.forms["myForm"]["fname"].value;
var y=document.forms["myForm"]["lname"].value;
var X=document.forms["myForm"]["email"].value;
var atpos=X.indexOf("@");
var dotpos=X.lastIndexOf(".");
var p=document.forms["myForm"]["pass"].value;
var cp=document.forms["myForm"]["cpass"].value;
if (x==null || x==""||x<3)
  {
  alert("First Name should be of atleast 3 character");
  document.myForm.fname.focus() ;
  return false;
  }
  if (y==null || y==""||y<3)
  {
  alert("Last Name should be of atleast 3 character");
  document.myForm.lname.focus() ;
  return false;
  }
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=X.length)
  {
  alert("Not a valid e-mail Id");
  document.myForm.email.focus() ;
  return false;
  }
  if (p==null || p==""||p<3)
  {
  alert(" Minimum 3 character");
  document.myForm.pass.focus() ;
  return false;
  }
  if (cp!=p)
  {
  alert("Both should match");
  document.myForm.cpass.focus() ;
  return false;
  }
}