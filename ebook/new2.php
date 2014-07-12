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
<div id="wrapper" >
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
<div id="leftcontent">
			<div id="leftpanel">
			<div id="utable">
<table  cellpadding="8">
<th>UPDATES</th>
<tr><td width="15%"><a href="ct.php"><img src="new.png"/>New notes of microprocessor are added to computer department.</a></td></tr>
<tr><td width="15%"><a href="new.php"><img src="new.png"/>Mumbai university news</td></tr>
<tr><td width="15%"><a href="message.php"><img src="new.png"/>Important Message from administrator</td></tr>
</table>
</div>
<br/>
<div id="ltable">
<table>
<th>OUR SPONSOUR</th>
<tr><td width="15%"><a href="#">STUPIDSID</td></tr>
<tr><td width="15%"><a href="#">ENGINEERING STUFF.IN</td></tr>
<tr><td width="15%"><a href="#">GOOGLE</td></tr>
<tr><td width="15%"><a href="#">WIKIPEDIA</td></tr>
<tr><td width="15%"><a href="#">YAHOO</td></tr>
</table></div>
<br />
<img src="ad5.gif" style="margin-left: "/>
			
				</div></div>
            
 <div id="contentwrap">
        <div id="content">
<table border=2 cellpadding=15>
        <tr><td><a href="new.htm">PREVIOUS PAGE</a></td></tr>
		<tr><td><h style="font-size:1.5em; font-weight:20px;">MVNS activists attack Mumbai University official </h><br/>The members of the student wing of the Maharashtra Navnirman Sena (MNS), attacked and blackened the...<a href="http://zeenews.india.com/news/maharashtra/mvns-activists-attack-mumbai-university-official_744593.html">  See more</a></td></tr>
		<tr>
		<td>
		<h style="font-size:1.5em; font-weight:20px;">Absent IPS officer got marks in law exam: Petition</h><br/>A petition filed in the Bombay High Court has alleged that IPS officer KL Bishnoi did not appear in ... <a href="http://zeenews.india.com/news/states/absent-ips-officer-got-marks-in-law-exam-petition_592222.html">see more</a>
		</td>
		</tr>
		<tr>
		<td>
		<h style="font-size:1.5em; font-weight:20px;">Supplements would be provided only if genuine need: Mumbai University</h><br/>University of Mumbai has clarified that supplements shall be provided in the final year graduation...   <a href="http://zeenews.india.com/news/maharashtra/supplements-would-be-provided-only-if-genuine-need-mumbai-university_697261.html">see more</a>

		</td>
		</tr>
		<tr>
		<td>
		<h style="font-size:1.5em; font-weight:20px;"></h><br/>
Close to 30 exams conducted on Wednesday by the University of Mumbai stand valid and the board of examinations, the body that takes the final call on exams, will decide if all these papers should be held again for the benefit of those students who missed their paper because of the disruption in train services in Mumbai. Examinations will also be conducted as per the time table on Thursday, said university officials. --		</td>
		</tr>
		<tr>
		<td>
		<h style="font-size:1.5em; font-weight:20px;">Rajan Welukar new VC of Mumbai University</h><br/>
		Rajan M Welukar was today appointed as the new Vice Chancellor of the University of Mumbai<a href="http://zeenews.india.com/news/maharashtra/rajan-welukar-new-vc-of-mumbai-university_639250.html">see more</a>
		</td>
		</tr>
		
            </table>		
            </div>
             

        </div>
		<div id="rightpan">
		<table >
		<tr>
		    <td style="background:#a4c739;color:#ffffff;border-radius:10px;">ADS</td>
			</tr>
		<tr><td  ><a href=#"><img src="ad6.jpg" style="width:100%;"/></a></td></tr>	
		<tr><td  ><a href=#"><img src="ad7.jpg" style="width:100%;"/></a></td></tr>	
		<tr><td  ><a href=#"><img src="ad8.jpg" style="width:100%;"/></a></td></tr>	
		</table>
		</div>
		</div> 


</body>
</html>