<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="FreeUser" />
     <link  rel="stylesheet" href="contact.css" />
	<title>E-BOOK101.com</title>
	<script>
	function validatecontact()
{
var x=document.forms["contact"]["fname"].value;
var y=document.forms["contact"]["email"].value;
var atpos=y.indexOf("@");
var dotpos=y.lastIndexOf(".");
var z=document.forms["contact"]["message"].value;
if (x==null || x==""||x<3)
  {
  alert("Name should be of atleast 3 character");
  document.contact.fname.focus() ;
  return false;
  }
  if (atpos<1 || dotpos<atpos+2 || dotpos+2>=y.length)
  {
  alert("Not a valid e-mail Id");
  document.contact.email.focus() ;
  return false;
  }
  if (z==null || z=="")
  {
  alert("Please Enter Some Message");
  document.contact.message.focus() ;
  return false;
  }
  }
	</script>
</head>

<body>
<div id="wrapper" >
<div id="header" >
<a href="#" style="text-decoration:none;"><h1 class="header">E-BOOK101.com</h1></a><br />
         <i>Adding Another Dimension To The Written Word</i>


</div>
           
<div class="container">
	         <fieldset><legend><h2>Contact US</h2></legend>
             <img src="contact.jpg" align="right"/>
           <p>PLEASE FILL UP THIS FORM:</p> <img src="cont.png" />
	
	<form name="contact" onsubmit="return validatecontact();" action="" method="post" >
	<table>
	<tr><td>NAME</td><td><input type="text" name="fname" placeholder="Enter Your Name"></td></tr>
    <tr><td>E-mail Id</td><td><input type="text" name="email" placeholder="Enter Your Email" ></td></tr>
    <tr><td>Subject</td><td><input type="text" placeholder="Enter Your Subject"></td></tr>
    <tr><td>Message</td><td><textarea name="message" id="message" rows="3" placeholder="Enter Your Message"></textarea></td></tr>
    <tr><td><input type="submit" style=":hover{background:#b2d857;}border:3px solid silver; border-radius:12px" value="Submit"></td><td><input type="reset" style=":hover{background:#b2d857;}border:3px solid silver; border-radius:12px" value="Cancel"></td></tr>
	
	</table>
</form>
<br /><br />
<br />
				<ul>
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <li><a href="main.php"><img src="h.png"/></a></li>
              <li><a href="about.php"><img src="about.png"/></a></li>
              
              </ul>
</fieldset>

        </div><!-- .span -->
			</div>
             
 
        </div>
        


</body>
</html>