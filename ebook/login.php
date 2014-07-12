<?php

include_once('config.php');
// Check, if username session is NOT set then this page will jump to login page
if (isset($_SESSION['username'])) {
        header('Location: main.php');
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="FreeUser" />
     <link  rel="stylesheet" href="contact.css" /><script src="login.js"></script>
	<title>E-BOOK101.com</title>
</head>

<body>
<div id="wrapper" >
<div id="header" >
<h1>E-BOOK101.com</h1><br />
         <i>Adding Another Dimension To The Written Word</i>


</div>
           
<div class="container">
       <p>YOU ARE SUCCESSFULLY REGISTERED!<br/>
	   <br/>
	   <br/>
	   SO NOW USE YOUR EMAIL ID AS USERNAME & GET LOGIN TO OUR WEBSITE</p>
	    <form name="login" onsubmit="return validatelogin();" method="post" action="logproc.php">
		         <input type="text" placeholder="Enter Username" name="uname"/>
		 		 <input type="password" placeholder="Enter password"  name="upass"/>
				 <input type="submit"   name="submit" style=":hover{background:#548603;}border:3px solid silver; border-radius:12px;" value="Submit"/>
				 </form>
			</div>
        


</body>
</html>