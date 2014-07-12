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
     <link  rel="stylesheet" href="comp.css" />
	<title>E-BOOK101.com</title>
</head>

<body >
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
<div id="leftpan">
<table  cellpadding="8">
<th>SELECT YEAR</th>
<tr><td width="15%"><a href="cif.php">FIRST YEAR</a></td></tr>
<tr><td width="15%"><a href="cis.php">SECOND YEAR</td></tr>
<tr><td width="15%"><a href="cit.php">THIRD YEAR </td></tr>
<tr><td width="15%"><a href="cift.php">FOUTH YEAR</td></tr>
<th>OTHER STUFFS</th>
<tr><td width="15%"><a href="time.php">TIME TABLE</td></tr>
<tr><td width="15%"><a href="cisy.php">SYLLABUS</td></tr>
</table>
<br />
<img src="ad5.gif" style="margin-left: -5px;"/>
</div>
            
            
 <div id="contentwrap">
        <div id="content"> <h2>CIVIL ENGINEERING</h2>
            Cource Difination:<br/>
<ul><li>One of the core engineering streams, it is related with study of infrastructure and construction of bridges, roads, dams, canals and buildings as well as their maintenance.</li><li> If your dad's a builder and you still want to study a bit (which isn't a bad idea- studying a bit more won't hurt you), then this is probably one good option for you.</li></ul>
Job Prospects:
<ul><li>Civil engineers plan and design bridges and tunnels, as well as highways, airfields, harbours, water and sewage systems, and buildings.</li><li> They also supervise the construction of such projects to ensure that they are built according to carefully drafted plans.</li><li> Thus they can expect to get jobs in companies that specialize in these functions, like L&T, etc.</li></ul>
Best when done from:
<ul><li>Mumbai: 1. VJTI 2. SPCE</li>
<li>Pune: 1. COEP 2. Sinhgad, Vadgaon</li>
<li>Delhi: 1. DCE</li>
<li>Bangalore: 1. RVCE 2. BMSCE</li>

			</div>
                
                 

        </div></div> 
		
		
		<div id="rightpan">
		<table >
		<tr>
		    <td>ADS</td>
			</tr>
		<tr><td ><a href=#"><img src="ad6.jpg" style="width:100%;"/></a></td></tr>	
		<tr><td ><a href=#"><img src="ad7.jpg" style="width:100%;"/></a></td></tr>	
		<tr><td ><a href=#"><img src="ad8.jpg" style="width:100%;"/></a></td></tr>	
		</table>
		</div>



</body>
</html>