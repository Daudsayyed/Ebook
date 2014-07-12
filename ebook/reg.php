<?php

include_once('config.php');
// Check, if username session is NOT set then this page will jump to login page
if (isset($_SESSION['username'])) {
        header('Location: main.php');
}

?>

<html>
<head>
<link rel="stylesheet" href="reg.css"/>
<title>E-BOOK101.com</title>  
<script src="reg.js"></script>
<script src="login.js"></script>
</head>
<body>

<div id="header" >
<a href="#" style="text-decoration:none;"><h1 class="header">E-BOOK101.com</h1></a><br />
         <i>Adding Another Dimension To The Written Word</i>
		 <fieldset>
		 <form name="login" onsubmit="return validatelogin();" method="post" action="logproc.php">
		         <input type="text" placeholder="Enter Username" name="uname"/>
		 		 <input type="password" placeholder="Enter password"  name="upass"/>
				 <input type="submit"   name="submit" style=":hover{background:#548603;}border:3px solid silver; border-radius:12px;" value="Submit"/>
				 </form>
		 </fieldset>
</div>


<div id="content" style="width:100%;display:block;">
<div id="slide" style="float:left;">
<h1 style="color:#444444;text-decoration:blink;" >IT'S FREE ! MAKE IT</h1>
<p style="color:#444452;">Our Main is to provide very useful required notes for Mumbai University Students.So LET WORK TOGETHER!</p>
<div id="frame">
<div class="w">Our Site Contain :</div>
<ul>
<li><img src="new.png"/>&nbsp;FREE CLASSES NOTES AS WELL AS VIDEO SESSION.</li>
<li><img src="new.png"/>&nbsp;ALL UPDATED NEW'S ABOUT UNIVERSITY.</li>
<li><img src="new.png"/>&nbsp;ALL STREAM'S QUESTION PAPER'S</li>
<li><img src="new.png"/>&nbsp;DOWNLOAD WHOLE TEXTBOOK IN FORM OF PDF,ZIP &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;& MANY MORE.</li>
<li><img src="new.png"/>&nbsp;WE KNOW THE PAIN OF AN ENGINEEER STUDENT!</li>

</ul>
</div>

<div style="width:100%;clear:both;"> </div>

</div>
<div id="reg" style="margin-top:20px;margin-right:1%;">

 <fieldset style="border:1px solid #4c4c4c;" >
 <div><img src="reg.png"/></div>
 <form name="myForm" action="insert.php" method="post" onsubmit="return validateForm();">
 <table>  
            <tr><td><h2 style="font-size:15px;">Create an Account</h2></td><td></td></tr>
            <tr><td><label>First Name</label></td>
            <td><input type="text" name="fname" placeholder="Atleast 3 character" size=30/></td></tr>
			<tr><td><br/></td><td><br/></td></tr>
            <tr><td><label>Last Name</label></td>
			<td><input type="text" name="lname" placeholder="Atleast 3 character" size=30/></td></tr>
			<tr><td><br/></td><td><br/></td></tr>
            <tr><td><label>Email</label></td>
			<td><input type="text" name="email" placeholder="Please Enter Valid Email Id" size=30/></td></tr>
			<tr><td><br/></td><td><br/></td></tr>
            <tr><td><label>Password</label> </td>
		    <td><input type="password" name="pass" placeholder="Please Enter Password" size=30/></td></tr>
		    <tr><td><br/></td><td><br/></td></tr>
            <tr><td> <label>Confirm Password</label></td>
		    <td><input type="password" name="cpass" placeholder="Password Should Match" size=30/></td></tr>
		    <tr><td><br/></td><td><br/></td></tr>
            <tr><td></td><td> <input type="submit" style=":hover{background:#b2d857;}border:3px solid silver; border-radius:12px" value="Register"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" style=":hover{background:#b2d857;}border:3px solid silver; border-radius:12px" value="Cancel"/></td>
 </table>
 </form></fieldset>
</div>
</div>

<div style="width:100%;clear:both;"> </div>

<div id="footer" style="width:100%;clear:both;position:absolute;bottom:0px;left:0px;" >
&copy;&nbsp;&nbsp;All the rights are reserved&nbsp;&nbsp;&nbsp;<a href="#">Terms & condition</a>&nbsp;&nbsp;&nbsp;<a href="">Contact Us</a>&nbsp;&nbsp;&nbsp;<a href="about.php">About Us</a>
</div>
</body>
</html>