<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="favicon.ico">
<title>Typing Worker</title>
<meta name="keywords" content="Design and Developed by: Salam Sakil" />
<meta name="description" content="Design and Developed by: Salam Sakil" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<style type="text/css">
<!--
.style22 {
	font-size: 20px;
	font-weight: bold;
	color:#FF0000;
	text-decoration:blink;
}
.style23 {
	font-size: 17px;
	font-weight: bold;
	color:#000000;
}	
-->
</style>
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script></head>
<body>
<div id="templatemo_wrapper">
	<div id="templatemo_header">
	 		<!--Social Medea-->
			<div id="Social_media">	
			Follow Us On
			<div class="footer_social_button">
                <a href="https://www.facebook.com/pages/SS-IT-Village/893648210710370" target="_blank"><img src="images/facebook-32x32.png" title="facebook" alt="facebook" /></a>
				<a href="#" target="_blank"><img src="images/Google+.png" title="Google+" alt="Google+" /></a>
				<a href="#" target="_blank"><img src="images/twitter-32x32.png" title="twitter" alt="twitter" /></a>
                <a href="#" target="_blank"><img src="images/youtube-32x32.png" title="youtube" alt="youtube" /></a>			</div>    		
			</div>
			<!--Social Medea-->
        <div id="site_title">
        	<h1><a href="http://www.typingworker.com">Online &amp; Offline Typing Worker </a></h1>
        </div>
        <div id="templatemo_search">
            <form action="http://www.google.com" method="get">
              <input type="text" value="Search" name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
              <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
            </form>
        </div>
        <div class="cleaner"></div>
    </div> <!-- end of header -->
    
    <div align="left" id="space_for_menu">
     <?php
	 include "menu.php"
	 ?>  
    </div> 
    <!-- end of menu -->
    
   
    
    <script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
    $('#slider').nivoSlider();
    });
    </script>
    
    <div id="templatemo_main">
      <!--start of right sideber-->
<div id="total_right_sidebar">
		<div id="header_right_sideber">
		  <div id="header_text">
		    <p>Notice Board</p>
	      </div>
		</div>
		<div id="right_box">
		<marquee direction="up" behavior="alternate" scrollamount="1" onmouseover="stop.this" onmouseout="start.this">
		  <?php
		  include "notice_board.html"
		  ?>
		  </marquee>
		</div>
		<div id="header_right_sideber2">
		  <div id="header_text">
		    <p>Calender</p>
	      </div>
		</div>
		<div id="right_box2">
		<?php
		include "cal.html"
		?>		
		</div>
	  </div>
		<!--End of right sidebar-->
		
		<!--Start of Left Sidebar-->
		
	  <div id="total_left_sidebar">
		<div id="header_left_sideber">
		  <div id="header_text_left">
		    <p>Digital Clock</p>
	      </div>
		</div>
		<div id="left_box" align="center">
		<?php
		include "Clock.html"
		?>
		</div>
				
		<div id="header_left_sideber2">
		  <div id="header_text_left">
		    <p>Our Visitor </p>
	      </div>
		</div>
		<div id="left_box2" align="center">
		  <?php
		  include "hit_counter.html"
		  ?>
		</div>
		
		<div id="header_left_sideber3">
		  <div id="header_text_left">
		    <p>Important links</p>
	      </div>
		</div>
		<div id="left_box3">
		<?php
		  include "links.html"
		  ?>
		</div>
	  </div>		
		
		<!--End of Left Sidebar-->
		<div id="header_body">
		<div id="header_body_text"> software download </div>
		</div>
		<div id="body">
		  <h5 class="style22" align="center"><u>Internet Software</u></h5>
		  <hr />
	     <div id="soft_icon"><img src="images/icons/mozila.jpg" width="50" height="50" /> </div>
	      <p>&nbsp;</p>
		  <div class="style23">
	        Download Mozilla firefox From here....
	          <div id="download"><a href="http://www.mediafire.com/download/pm57k651dq88ukp/Firefox_Setup_36.0.exe" target="_blank" title="Download Mozilla firefox"><img src="images/icons/down.png" width="92" height="22" border="0"/></a></div>
		  </div>
	      <hr />
		  
		  <hr />
	     <div id="soft_icon"><img src="images/icons/google chorome.jpg" width="50" height="50" /> </div>
	      <p>&nbsp;</p>
		  <div class="style23">
	        Download Google Chrome From here....
              <div id="download"><a href="http://www.mediafire.com/download/vsqsafbd8s6xqs8/ChromeSetup.exe" target="_blank"><img src="images/icons/down.png" width="92" height="22" border="0" title="Download Google Chrome"/></a></div>
		  </div>
	      <hr />
		  
		  <hr />
	     <div id="soft_icon"><img src="images/icons/internet download manager.jpg" width="50" height="50" /> </div>
	      <p>&nbsp;</p>
		  <div class="style23">
	        Download Internet download manager full version From here with crack file..
	          <div id="download"><a href="http://www.mediafire.com/download/ff5xy4f62zd5js7/idman605%5BEHACKWORLD.BLOGSPOT.COM%5D.zip" target="_blank"><img src="images/icons/down.png" width="92" height="22" border="0" title="Download Internet download manager"/></a></div>
		  </div>
	      <hr />
		  
		  <hr />
	     <div id="soft_icon"><img src="images/icons/du meater.jpg" width="50" height="50" /> </div>
	      <p>&nbsp;</p>
		  <div class="style23">
	        Download Du Meter From here....
	          <div id="download"><a href="http://www.mediafire.com/download/czcy97lsks5lzd3/photoshine.exe" target="_blank"><img src="images/icons/down.png" width="92" height="22" border="0" title=" Download Du Meter"/></a></div>
		  </div>
	      <hr />
		  
		   <hr />
	     <div id="soft_icon"><img src="images/icons/team viewer.jpg" width="50" height="50" /> </div>
	      <p>&nbsp;</p>
		  <div class="style23">
	        Download Team viewer From here....
	          <div id="download"><a href="http://www.mediafire.com/download/9q89r84q8rnh28l/TeamViewer_Setup-ioh_2.exe" target="_blank"><img src="images/icons/down.png" width="92" height="22" border="0" title="Download Team viewer"/></a></div>
		  </div>
	      <hr />
		  
		  <hr />
	     <div id="soft_icon"><img src="images/icons/netscape.jpg" width="50" height="50" /> </div>
	      <p>&nbsp;</p>
		  <div class="style23">
	        Download Netscape browser From here....
	          <div id="download"><a href="http://www.mediafire.com/download/9q89r84q8rnh28l/TeamViewer_Setup-ioh_2.exe" target="_blank"><img src="images/icons/down.png" width="92" height="22" border="0" title="Download Netscape browser"/></a></div>
		  </div>
	      <hr />
		  
		  <hr />
	     <div id="soft_icon"><img src="images/icons/sea moneky.jpg" width="50" height="50" /> </div>
	      <p>&nbsp;</p>
		  <div class="style23">
	        Download Sea Moneky browser From here....
	          <div id="download"><a href="http://www.mediafire.com/download/9q89r84q8rnh28l/TeamViewer_Setup-ioh_2.exe" target="_blank"><img src="images/icons/down.png" width="92" height="22" border="0" title=" Download Sea Moneky"/></a></div>
		  </div>
	      <hr />
		  
		  <hr />
	     <div id="soft_icon"><img src="images/icons/dragon browser.jpg" width="50" height="50" /> </div>
	      <p>&nbsp;</p>
		  <div class="style23">
	        Download Dragon browser From here....
	          <div id="download"><a href="http://www.mediafire.com/download/9q89r84q8rnh28l/TeamViewer_Setup-ioh_2.exe" target="_blank"><img src="images/icons/down.png" width="92" height="22" border="0" title="Download Dragon browser"/></a></div>
		  </div>
	      <hr />
		  <h5 class="style22" align="center"><u>Office Programs</u></h5>
		   <hr />
	     <div id="soft_icon"><img src="images/icons/office 2007.jpg" width="50" height="50" /> </div>
	      <p>&nbsp;</p>
		  <div class="style23">
	        Download MS office 2007 From here....
	          <div id="download"><a href="http://www.mediafire.com/download/yr36c16cq0m74d9/Photoshop_CS6.zip" target="_blank"><img src="images/icons/down.png" width="92" height="22" border="0" title="Download MS office 2007"/></a></div>
		  </div>
	      <hr />
	      <hr />
	     <div id="soft_icon"><img src="images/icons/bijoy bayanno.jpg" width="50" height="50" /> </div>
	      <p>&nbsp;</p>
		  <div class="style23">
	        Download Bijoy Bayanno 2009 From here....
              <div id="download"><a href="http://www.mediafire.com/download/1q6vt7qivq2foeo/audio_n_video_converter%28best%29.zip" target="_blank"><img src="images/icons/down.png" width="92" height="22" border="0" title="Bijoy Bayanno 2009"/></a></div>
		  </div>
	      <hr />
		  
		 
	      <p>&nbsp;</p>
		   &nbsp;</p>
		  <p>&nbsp;</p>
	      <p>&nbsp;</p>
		  <p>&nbsp;</p>
	      <p>&nbsp;</p>
		  <div class="pagging" align="center">
                    <ul>
                        <li><a href="software_download_1.php" target="_parent">Previous</a></li>
                        <li><a href="software_download_1.php" target="_parent">1</a></li>
                        <li><a href="software_download_2.php" target="_parent">2</a></li>
                        <li><a href="software_download_3.php" target="_parent">3</a></li>
                        <li><a href="software_download_3.php" target="_parent">Next</a></li>
                    </ul>
          </div>
	      <p>&nbsp;</p>
	      
	  </div>
		
		
		
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p><br class="cleaner" />
      </p>
  </div> 
    <!-- end of main -->
    
    <div id="templatemo_footer">
      <div class="cleaner"></div>
  </div> <!-- end of footer -->

</div>
 <div id="templatemo_cr_bar_wrapper">
	<div id="templatemo_cr_bar">
    	Copyright © 2015 <a href="http://typingworker.com"><abbr title="Typingworker.com">Typing Worker </abbr></a> | Designed by <a href="#">Abdul Mozid</a> </div>
</div>

</body>
</html>