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
<tr><td width="15%"><a href="exf.php">FIRST YEAR</a></td></tr>
<tr><td width="15%"><a href="exs.php">SECOND YEAR</td></tr>
<tr><td width="15%"><a href="ext.php">THIRD YEAR </td></tr>
<tr><td width="15%"><a href="exft.php">FOUTH YEAR</td></tr>
<th>OTHER STUFFS</th>
<tr><td width="15%"><a href="time.php">TIME TABLE</td></tr>
<tr><td width="15%"><a href="#">SYLLABUS</td></tr>
</table>
<br />
<img src="ad5.gif" style="margin-left: -5px;"/>
</div>
            
            
 <div id="contentwrap">
        <div id="content"> <h2>EXTC ENGINEERING</h2>
		Cource Difination:<br/>
<ul><li>More to do with electronics than communication. So if you love telecommunication and are opting for this course only on the basis of that, bear in mind that only the last year of this curriculum truly deals with communication.</li><li> In the first three years, you'll be given an introduction to telecommunication but you will still be dealing with electronic circuits on a large scale, whether practically or on paper. Only the final year differs from electronics engineering, otherwise the curriculum is more or less the same.</li><li> The subject content is the same, only the names of the subjects are changed to make it appear different.</li></ul>
Job Prospects:
<ul><li>A major difference between EXTC and Electronics may be the fact that, after doing a Masters and specializing in a particular field, a Telecom engineer can expect to work for Telecom giants like Reliance Communications, Huawei & Intervo or cellphone companies like Nokia, designing mobile networks or mobile phones respectively.</li><li> For employment immediately after graduation, however, just read above.</li></ul>
Best when done from:
<ul><li>Mumbai: 1. DJ Sanghvi 2. SPIT 3. VJTI</li>
<li>Pune: 1. COEP 2. VIT 3. PICT</li>
<li>Delhi: 1. NSIT 2. DCE</li>
<li>Bangalore: 1. PESIT 2. MSRIT 3. RVCE</li>

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