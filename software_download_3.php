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
		<h5 class="style22" align="center"><u>Web Design Tools</u></h5>
		  <hr />
	     <div id="soft_icon"><img src="images/icons/dreamwever.jpg" width="50" height="50" /> </div>
	      <p>&nbsp;</p>
		  <div class="style23">
	        Download Dreamweaver From here....
	          <div id="download"><a href="http://www.mediafire.com/download/yr36c16cq0m74d9/Photoshop_CS6.zip" target="_blank" title="Download Dreamweaver"><img src="images/icons/down.png" width="92" height="22" border="0"/></a></div>
		  </div>
	      <hr />
	      
		  
		  <hr />
	     <div id="soft_icon"><img src="images/icons/Note pad.jpg" width="50" height="50" /> </div>
	      <p>&nbsp;</p>
		  <div class="style23">
	        Download Notepad++ From here....
              <div id="download"><a href="http://www.mediafire.com/download/adax2hmbwhir7dm/adobe_photoshop_cs_8.0.exe" target="_blank"><img src="images/icons/down.png" width="92" height="22" border="0" title="Download Notepad++"/></a></div>
		  </div>
	      <hr />
		  
		  <hr />
	     <div id="soft_icon"><img src="images/icons/xamp.jpg" width="50" height="50" /> </div>
	      <p>&nbsp;</p>
		  <div class="style23">
	        Download Photoshine From here....
	          <div id="download"><a href="http://www.mediafire.com/download/rb36rl796dwiznb/Photo_Instrument.zip" target="_blank"><img src="images/icons/down.png" width="92" height="22" border="0" title="Download Photoshine"/></a></div>
		  </div>
	      <hr />
		
	      <p>&nbsp;</p>
		   <h5 class="style22" align="center"><u>PDF maker </u></h5>
		   <hr />
	     <div id="soft_icon"><img src="images/icons/Do pdf.jpg" width="50" height="50" /> </div>
	      <p>&nbsp;</p>
		  <div class="style23">
	        Download Do Pdf From here....
	          <div id="download"><a href="http://www.mediafire.com/download/hp16ffqi4vin31e/dopdf-7.exe" target="_blank"><img src="images/icons/down.png" width="92" height="22" border="0" title="Download Do Pdf"/></a></div>
		  </div>
	      <hr />
	      <hr />
	     <div id="soft_icon"><img src="images/icons/doc ot pdf converter.jpg" width="50" height="50" /> </div>
	      <p>&nbsp;</p>
		  <div class="style23">
	        Download Doc to Pdf Converter From here....
              <div id="download"><a href="http://www.mediafire.com/download/y2hsnw22ssnsw3a/doc2pdf2_setup.exe" target="_blank"><img src="images/icons/down.png" width="92" height="22" border="0" title="Download Doc to Pdf Converter"/></a></div>
		  </div>
	      <hr />
		  
		  <hr />
	     <div id="soft_icon"><img src="images/icons/jpg to pdf coverter.jpg" width="50" height="50" /> </div>
	      <p>&nbsp;</p>
		  <div class="style23">
	        Download JPG to Pdf Converter From here....
	          <div id="download"><a href="http://www.mediafire.com/download/9efdgm3shm9f1z2/Free-JPG-To-PDF-Converter-Setup.exe" target="_blank"><img src="images/icons/down.png" width="92" height="22" border="0" title="Download JPG to Pdf Converter"/></a></div>
		  </div>
	      <hr />
		  
		 
	      <hr />
	     <div id="soft_icon"><img src="images/icons/pdfzilla.jpg" width="50" height="50" /> </div>
	      <p>&nbsp;</p>
		  <div class="style23">
	        Download Pdfzilla From here....
	          <div id="download"><a href="http://www.mediafire.com/download/mo2y570k7lq66j1/pdfzilla.exe" target="_blank"><img src="images/icons/down.png" width="92" height="22" border="0" title="Download Pdfzilla"/></a></div>
		  </div>
	      <hr />
	      <p>&nbsp;</p>
	      <p>&nbsp;</p>
	      <p>&nbsp;</p>
	      <p>&nbsp;</p>
		  <div class="pagging" align="center">
                    <ul>
                        <li><a href="software_download_2.php" target="_parent">Previous</a></li>
                        <li><a href="software_download_1.php" target="_parent">1</a></li>
                        <li><a href="software_download_2.php" target="_parent">2</a></li>
                        <li><a href="software_download_3.php" target="_parent">3</a></li>
                        <li><a href="#" target="_parent">Next</a></li>
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