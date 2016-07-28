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
<!--
ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
<style type="text/css">
<!--
.style22 {
	font-size: 20px;
	font-weight: bold;
	color:#FF0000;
}
-->
</style>
</head>
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
		<div id="header_body_text"> Contact us </div>
		</div>
		<div id="body">
		  
		  <h5>
		    <em class="style22"><u>Please Contact: </u></em>
		    <strong><p>Skype : salam.shakil1</p>
			<p>Phone:  <a href="tel:+88 (0) 1710627066">01710627066</a></p>
			<p>Facebook: <a href="https://www.facebook.com/myhometownkushtia?fref=ts" target="_blank">Salam Shakil</a></p>			
			<p>Email: <a href="mailto:admin@typingworker.com">admin@typingworker.com</a></p>
		  </strong>		  </h5>
		  <p>&nbsp;</p>
		  <em class="style22"><u>Or massage </u></em>
		  <form method="post" name="contact" action="#">
                        
                        <label for="author"><b>Name:</b></label> 
                        <p>
                          <input name="name" type="text" class="required input_field" id="name" onblur="MM_validateForm('keyword','','R');return document.MM_returnValue" />
                        </p>
                        <div class="cleaner h10"></div>
						
						<label for="author"><b>Phone No:</b></label> 
                        <p>
                          <input name="mobileno" type="text" class="required input_field" id="mobileno" onblur="MM_validateForm('keyword','','RisNum');return document.MM_returnValue" />
                        </p>
                        <div class="cleaner h10"></div>
						
                        <label for="email"><b>Email:</b></label>
                        <p>
                          <input name="email" type="text" class="validate-email required input_field" id="email" onblur="MM_validateForm('keyword','','RisEmail');return document.MM_returnValue" />
                        </p>
                        <div class="cleaner h10"></div>
                        
						<label for="subject"><b>Subject:</b></label> 
			<p>
			  <input name="subject" type="text" class="input_field" id="subject" />
			</p>
						<div class="cleaner h10"></div>
        
                        <label for="text"><b>Message:</b><br />
                        </label> <textarea name="message" cols="0" rows="0" class="required" id="message"></textarea>
                        <div class="cleaner h10"></div>
                        
                        <input type="submit" value="Submit" id="submit" name="submit" class="submit_btn float_l" />
						<input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_l" />
                        
       	  </form> 
		 
		  <p>&nbsp;</p>
	      <p>&nbsp;</p>
	      <p>&nbsp;</p>
	      <p><strong>Address :</strong> Village : Berkalowa, Post : Kaya, Upazila :  Kumarkhali, <br />
District/City :  Kushtia, Country : Bangladesh, Post/Zip Code : 7000. </p>
	      <p>&nbsp;</p>
	      <p>&nbsp;</p>
	      <p>&nbsp;</p>
	      <p>&nbsp;</p>
	      <p>&nbsp;</p>
	  </div>
		
		<?php
$name=$_POST["name"];
$mobileno=$_POST["mobileno"];
$email=$_POST["email"];
$subject=$_POST["subject"];
$message=$_POST["message"];
$con = mysql_connect("localhost","typingwo_wp534","AMozid987123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("typingwo_db", $con);

mysql_query("INSERT INTO tb(`name`, `mobileno`, `email`, `subject`, `message`) 
VALUES('$name','$mobileno','$email','$subject','$message')");
?>
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