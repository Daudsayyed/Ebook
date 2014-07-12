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
	<title>E-BOOK101.COM</title>
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
        <div id="content"><h2 style="text-align:center;" > Latest New's </h2>
		<table border=2 cellpadding=15 style="border-collapse:collapse;">
		<tr><td><h style="font-size:1.5em; font-weight:20px;">Bad New's for First year engineering students </h><br/>First year engineering students will have to re-appear for three of their papers. After the Mumbai crime branch confirmed the paper leak early this week, the University of Mumbai is all set to conduct the re-examination for the leaked papers on June 14, 16 and 18. The decision was taken in the board of examination (BoE) meeting held on Friday. --</p></td></tr>
		<tr>
		<td>
		<h style="font-size:1.5em; font-weight:20px;">Thane Sub-center of Mumbai University inaugurated</h><br>During his speech, Welukar said that the new office will act as a shadow university.  <a href="http://zeenews.india.com/news/maharashtra/thane-sub-center-of-mumbai-university-inaugurated_735082.html">see more</a>
		</td>
		</tr>
		<tr>
		<td>
		<h style="font-size:1.5em; font-weight:20px;">RE-EXAME !</h><br/>
		The Board of examinations of the University of Mumbai has decided to conduct Wednesday&rsquos exams again for those students who missed taking them because of the crippled rail services in Mumbai. Wednesday&rsquos paper will be held on the day after the particular course&rsquos examination concludes. The examination department received information the Institute of Science, Wilson College, Khalsa College and DG Ruparel College where candidates could not reach before 2 pm and had to miss their examination at MSc.Part-I. --
		</td>
		</tr>
		<tr>
		<td>
		<h style="font-size:1.5em; font-weight:20px;">Tata Consultancy donate Rs 4.2 crore to Mumbai University</h><br/>
		Tata Consultancy Services on Monday pledged a donation of Rs 4.2 crore to Mumbai University for carrying out the repairs and restoration of the university's Rajabai Clock Tower and Library. A Memorandum of understanding was signed between the TCS and the University in presence of Maharashtra governor and university chancellor K Sankaranarayanan at Raj Bhavan.  
		</td>
		</tr>
		<tr>
		<td>
		<img src="mu.jpg" style="float:right;" />
		<h style="font-size:1.5em; font-weight:20px;">Six detained in Mumbai varsity exam papers leak</h><br/>
		Six people, including two Mumbai University employees, were detained in connection with the leak of ...<a href="http://zeenews.india.com/news/maharashtra/six-detained-in-mumbai-varsity-exam-papers-leak_779876.html">  See more</a>
		</td>
		</tr>
		<tr><td><a href="new2.php" style="float:right;">NEXT PAGE</a></td></tr>
		
            </table></div>
             

        </div></div> 
        <div id="rightpan">
		<table >
		<tr>
		    <td style="background:#a4c739;color:#ffffff;border-radius:10px;" >ADS</td>
			</tr>
		<tr><td  ><a href=#"><img src="ad6.jpg" style="width:100%;"/></a></td></tr>	
		<tr><td  ><a href=#"><img src="ad7.jpg" style="width:100%;"/></a></td></tr>	
		<tr><td  ><a href=#"><img src="ad8.jpg" style="width:100%;"/></a></td></tr>	
		</table>
		</div>



</body>
</html>