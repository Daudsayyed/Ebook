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
<li style="float:right;" ><a href='reg.php'><img src="lo.png" alt="LOG OUT" style="margin-top:-5px;"/></a></li>
</ul>
        </div>
<div id="leftpan">
<table  cellpadding="8">
<th>SELECT YEAR</th>
<tr><td width="15%"><a href="cf.php">FIRST YEAR</a></td></tr>
<tr><td width="15%"><a href="cs.php">SECOND YEAR</td></tr>
<tr><td width="15%"><a href="ct.php">THIRD YEAR </td></tr>
<tr><td width="15%"><a href="cft.php">FOUTH YEAR</td></tr>
<th>OTHER STUFFS</th>
<tr><td width="15%"><a href="time.php">TIME TABLE</td></tr>
<tr><td width="15%"><a href="csy.php">SYLLABUS</td></tr>
</table>
<br />
<img src="ad5.gif"  style="width:100%; margin-left:1%;"/>
</div>
            
            
 <div id="contentwrap">
        <div id="content"> <h2> COMPUTER ENGINEERING</h2>
		Cource Difination:<br/>
		Coding comprises a huge part of this course. So if you love programming and if your eyes don't start watering when you spend a good amount of time on the computer, you can go for it. Also involves the hardware part of the computer. One of the in-demand courses.

Job Prospects:
<ul><li>Great job prospects. Most students get placed, regardless of college.</li><br/><li> A computer engineer continues doing what he's been doing for years, i.e.- coding! Expect IT companies like Accenture, TCS, Infosys and Wipro to visit your college.</li></ul>
Best when done from:
<ul>
<li> Mumbai: 1. VJTI 2. SPIT</li>
<li>Pune: 1. COEP 2. VIT 3. PICT</li>
<li> Delhi: 1. DCE 2. NSIT</li>
<li> Bangalore: 1. RVCE 2. PESIT 3. BMSCE</li>
</ul>
            </div>
                
                 

        </div></div> 
		
		
		<div id="rightpan">
		<table >
		<tr>
		    <th>ADS</th>
			</tr>
		<tr><td  ><a href=#"><img src="iph.gif" style="width:100%"/></a></td></tr>	
		<tr><td  ><a href=#"><img src="ad4.jpg" style="width:100%"/></a></td></tr>	
		<tr><td  ><a href=#"><img src="pu.jpg" style="width:100%"/></a></td></tr>	
		</table>
		</div>



</body>
</html>