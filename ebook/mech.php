
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
<tr><td width="15%"><a href="mf.php">FIRST YEAR</a></td></tr>
<tr><td width="15%"><a href="ms.php">SECOND YEAR</td></tr>
<tr><td width="15%"><a href="mt.php">THIRD YEAR </td></tr>
<tr><td width="15%"><a href="mft.php">FOUTH YEAR</td></tr>
<th>OTHER STUFFS</th>
<tr><td width="15%"><a href="time.php">TIME TABLE</td></tr>
<tr><td width="15%"><a href="msy.php">SYLLABUS</td></tr>
</table>
<br />
<img src="ad5.gif" style="margin-left: -5px;"/>
</div>
            
            
 <div id="contentwrap">
        <div id="content"> <h2>MECHANICAL ENGINEERING</h2>
		Cource Difination:<br/>
<ul><li>It can be referred to as the mother of all branches in engineering.</li><li> Involves a lot of technical drawing and must be opted only if you are sure that you don't mind spending majority of your time in drawing and other related calculations.</li> Complicated physics comprises a major part of the curriculum.</li><li> Basics of automobiles are also included as a part of this course.</li></ul>
Job Prospects:
<ul><li>	A lot of core mechanical companies, including Larsen and Toubro, Godrej offer highly technical job profiles.</li><li> Students are expected to have a good knowledge of what they've studied in the past 4 years.</li></ul>
Best when done from:
<ul><li>Mumbai: 1. VJTI 2. SPCE</li>
<li>	Pune: 1. COEP 2. VIT 3. MIT</li>
<li>	Delhi: 1. DCE 2. MAIT</li>
<li>	Bangalore: 1.MSRIT 2. RVCE</li></ul>
            </div>
                
                 

        </div></div> 
		
		
		<div id="rightpan">
		<table >
		<tr style="background:#a4c739;color:#ffffff;border-radius:10px;">
		    <td >ADS</td>
			</tr>
		<tr><td  ><a href=#"><img src="ad31.gif" style="width:100%;"/></a></td></tr>	
		<tr><td  ><a href=#"><img src="ad7.jpg" style="width:100%;"/></a></td></tr>	
		<tr><td  ><a href=#"><img src="ad8.jpg" style="width:100%;"/></a></td></tr>	
		</table>
		</div>



</body>
</html>