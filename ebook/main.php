<?php

include_once('config.php');
// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
        header('Location: reg.php');
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="FreeUser" />
     <link  rel="stylesheet" href="main.css" />
	<title>E-BOOK101.com</title>
</head>
<body>
<div id="header" >
<a href="#" style="text-decoration:none;"><h1 class="header">E-BOOK101.com</h1><a><b>follow us on</b><br />
         <i>Adding Another Dimension To The Written Word</i>

<section class="social">
              
  	          	<a href="#" class="addthis_button_facebook"><img src="fl.png" alt="Share to Facebook" /></a>
   	         	<a href="#" class="addthis_button_twitter"><img src="tl.png" alt="Share to Twitter" /></a>
	    		<a href="#" class="addthis_button_blogger"><img src="rl.png" alt="Blogger" /></a>
</section>
</div>
<div id="navigation">
            <ul class='dd_menu'>
<li><a href='main.php'>HOME</a></li>
<li><a href='new.php'>NEW'S</a></li>
<li><a href='#'>STREAM</a>
	<ul>
	<li><a href='comp.php'>COMPUTER</a></li>
	<li><a href='mech.php'>MECHANICAL</a></li>
	<li><a href='elect.php'>ELECTRONIC</a></li>
	<li><a href='extc.php'>EXTC</a></li>
	<li><a href='civil.php'>CIVIL</a></li>
	</ul>
</li>
<li><a href='about.php'>ABOUT</a></li>
<li><a href='contact.php'>CONTACT US</a></li>
<li style="float:right;" ><a href='logout.php'><img src="lo.png" alt="LOG OUT" style="margin-top:-5px;"/></a></li>
</ul>
        </div>
<div style="width:100%;clear:both;display:block;">
		
<div id="leftcontent">
			<div id="leftpanel">
			<div id="utable">
<table  cellpadding="8">
<th height="12%">UPDATES</th>
<tr><td ><a href="ct.php"><img src="new.png"/>New notes of microprocessor are added to computer department.</a></td></tr>
<tr><td><a href="new.php"><img src="new.png"/>Mumbai university news </td></tr>
<tr><td ><a href="message.php"><img src="new.png"/>Important Message from administrator</td></tr>
</table>
</div>
<br/>
<div id="ltable">
<table>
<th>OUR SPONSOUR</th>
<tr><td width="15%"><a href="www.stupidsid.com">STUPIDSID</td></tr>
<tr><td width="15%"><a href="www.engineeringstuff.in">ENGINEERING STUFF.IN</td></tr>
<tr><td width="15%"><a href="www.google.com">GOOGLE</td></tr>
<tr><td width="15%"><a href="">WIKIPEDIA</td></tr>
<tr><td width="15%"><a href="www.yahoo.com">YAHOO</td></tr>
</table></div>
<br />
<img src="ad5.gif" style="width:100%"/>
			
				</div></div>
            
            
 <div id="contentwrap">
        <div id="content">
            <p style="color:#444452;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hello Mumbai University student! ,<br/> we introduced this site to help YOU OUT</p>
             <p style="color:#444452;">E-book101.com is for mumbai university engg. students.<br/>here we provide stuffs in formats like .pdf,.doc,.ppt,video tutorials etc.all the engg. streams are listed in the menu & start utilizing this cool website</p><br/><h2 style="color:#3b3b3b;">Stuff's Provided in below format</h2>
            <div id="img"><ul><li><img src="pdf.png"/></li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li><img src="doc.png"/></li>                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li><img src="ppt.png"/></li><br />           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li><img src="video.png"/></li>                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li><img src="zip.png"/></li></ul>
            
            </div>
			
    

        </div></div> 
		
		
		<div id="rightpan">
		<table >
		<tr>
		    <th style="background:#a4c739;color:#ffffff;border-radius:10px;">ADS</th>
			</tr>
		<tr><td ><a href=#"><img style="width:100%" src="ad1.png"/></a></td></tr>	
		<tr><td  ><a href=#"><img style="width:100%" src="ad2.jpg"/></a></td></tr>	
		<tr><td ><a href=#"><img style="width:100%" src="ad3.jpg"/></a></td></tr>	
		</table>
		</div>
</div>

</body>
</html>