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
    
    <div id="templatemo_slider_wrapper">
        
        <div id="slider" class="nivoSlider">
            <img src="images/slider/01.jpg" alt="Slider 01" title="Online And Offline Typing" /></a>
            <img src="images/slider/02.jpg" alt="Slider 02" title="Data Entry" /></a>
            <img src="images/slider/03.jpg" alt="Slider 03" title="Graphics And Logo Design" /></a>
        </div>
        
        <div id="htmlcaption" class="nivo-html-caption">
        	<strong>This</strong> is an example of a HTML caption with <a href="#">a link</a>.
        </div>
    
    </div>
    
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
		<!--<marquee direction="down" behavior="alternate" scrollamount="1">-->
		  <?php
		  include "notice_board.html"
		  ?>
		  <!--</marquee>-->
		</div>
		<div id="header_right_sideber2">
		  <div id="header_text">
		    <p>Recent Result</p>
	      </div>
		</div>
		<div id="right_box2">
		<?php
		include "result_board.html"
		?>
		</div>
		
		
		<div id="header_right_sideber3">
		  <div id="header_text">
		    <p>Our Work   Time</p>
	      </div>
		</div>
		<div id="right_box3">
		<?php
		include "worktime.html"
		?>
	
		</div>
		<div id="header_right_sideber4">
		  <div id="header_text">
		    <p>Calendar</p>
	      </div>
		</div>
		<div id="right_box4">
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
		
	<div id="header_left_sideber4">
		  <div id="header_text_left">
		    <p>About Me </p>
	      </div>
		</div>
		<div id="left_box4" align="center">
		<div id="photo_shakil"></div>
		<div align="left" style="color:#ffffff; font-size:16px; font-family: 'Dosis', sans-serif; padding-left:5px; padding-top:5px;"> 
		M.A. Salam Shakil<br/>
M.A.(N.U.)<br/>
Founder & Director<br />

<u><i><b>Please contact me</b></i></u><br />
Mob:<a href="tel:+88 (0) 1710627066"> 01710627066</a><br />
skype:salam.shakil1
Email:<br/>
<a href="mailto:admin@typingworker.com"><div style="font-size:12px;">admin@typingworker.com</div></a>
<a href="https://www.facebook.com/myhometownkushtia" title="My Facebook ID" target="_blank"><center><img src="images/Social icon/facebook-icon.png" height="50" width="50"/></center></a>
</div>
		</div><!--end of left box 4-->
			
	  </div>	
		<!--End of Left Sidebar-->
		<div id="header_body">
		<div id="header_body_text">HOME</div>
		</div>
		<div id="body">
		  <h5>Welcome to Typingworker.com. We are a freelancer group. You can hire Us for your <strong> Ms-Word, Ms-Excel, Data Entry, Web Site Design & Development, Graphics and Logo Design </strong>Work. Thank you For visit Us.</h5>
			  <hr />
			  <h5>You can <strong>Download</strong> Adobe Photoshop Cs6, Download Adobe Illustrator Cs6, Converters, Multimedia Software, Internet Browser, Internet Download Manager and Other <strong>Important software</strong> From this site.</h5>
			 <div id="more"><a href="software_download_1.php"><img src="images/icons/More.png" width="60" height="20" border="0" title="Download Software"/></a></div>
			  <p>&nbsp;</p>
			  <hr />
			   <h5>You can <strong>Download</strong> Adobe photoshop, Adobe Illustrator, Ms-Word, Ms-Execl, Ms-PowerPoint tutorial from here</h5>
			   <div id="more"><a href="tutorial_1.php"><img src="images/icons/More.png" width="60" height="20" border="0" title="Download Software"/></a></div>
			   <p>&nbsp;</p>
			 <hr />
			  <p>&nbsp;</p>
		  <center>
		    <p><span style="font-size:30px; color:#FF6666;">সবাইকে জানাই ঈদুল আযহা এর অগ্রীম সুভেচ্ছা</span></p>
		    <p>&nbsp;</p>
		  </center>
			  <p align="center"><img src="images/new_pic/Eid-ul-Adha-Pictures.jpg" width="543" height="330" border="10"/></p>
			  <p>&nbsp;</p>
			  <p>&nbsp;</p>
			  <p>&nbsp;</p>
			  <p>&nbsp;</p>
			  <p>&nbsp;</p>
			  <p>&nbsp;</p>
			  <p>&nbsp;</p>
			  <p>&nbsp;</p>
			  <p>&nbsp;</p>
			  <p><br class="cleaner" />
          </p>
	  </div>
		
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
    	Copyright © 2015 <a href="http://typingworker.com"><abbr title="Typingworker.com">Typing Worker </abbr></a> | Designed by <a href="#" target="_parent">Abdul Mozid</a>    </div>
</div>

</body>
</html>