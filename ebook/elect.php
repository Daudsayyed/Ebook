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
<tr><td width="15%"><a href="ef.php">FIRST YEAR</a></td></tr>
<tr><td width="15%"><a href="es.php">SECOND YEAR</td></tr>
<tr><td width="15%"><a href="et.php">THIRD YEAR </td></tr>
<tr><td width="15%"><a href="eft.php">FOUTH YEAR</td></tr>
<th>OTHER STUFFS</th>
<tr><td width="15%"><a href="time.php">TIME TABLE</td></tr>
<tr><td width="15%"><a href="#">SYLLABUS</td></tr>
</table>
<br />
<img src="ad5.gif" style="margin-left: -5px;"/>
</div>
            
            
 <div id="contentwrap">
        <div id="content"> <h2>ELECTRONIC ENGINEERING</h2>
		Cource Difination:<br/>
<ul><li>If you like wires and playing with circuits, go for the electronics branch.</li><li> Electronics engineering involves the design and testing of electronic circuits that use the properties of components such as resistors, capacitors, inductors, diodes and transistors to achieve a particular functionality.</li><li> You will be taught the basics of microprocessors, microcontrollers, their circuits, and working of the insides of a very basic level computer.</li><li> You will also be given an introduction to robotics.</li></ul>
Job Prospects:
<ul><li>Core companies like Philips offer technical job profiles to candidates.</li>
<li> Job structure involves synthesizing Integrated Circuits (ICs) maintenance, repair, and development of electronic devices or appliances like televisions, refrigerators, air conditioners, etc.</li><li> No, it is NOT what electricians do!</li></ul><br/>
Best when done from:
<ul><li>Mumbai: 1. VJTI 2. SPIT</li>
<li>Pune: 1. Modern COE</li>
<li>Delhi: 1. DCE 2. MAIT</li>
<li>Bangalore: 1. UVCE 2. RVCE 3. PESIT</li></ul>

            </div>
                
                 

        </div></div> 
		
		
		<div id="rightpan">
		<table >
		<tr>
		    <td >ADS</td>
			</tr>
		<tr><td  ><a href=#"><img src="ad6.jpg" style="width:100%;"/></a></td></tr>	
		<tr><td  ><a href=#"><img src="ad7.jpg" style="width:100%;"/></a></td></tr>	
		<tr><td  ><a href=#"><img src="ad8.jpg" style="width:100%;"/></a></td></tr>	
		</table>
		</div>



</body>
</html>