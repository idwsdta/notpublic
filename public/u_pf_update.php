<?php
require_once 'header.php';
//$custid =Util::StrCookie('susrid');
$custid = 25;
?>
  <title><?= SITE_NAME?> | <?=  'Username'?></title>
<style type="text/css">
.successbox {
	background-color:#f4f4f4 !important;
	background-image:url(../public/images/gen/tick_small.png);
	border:2px solid #629f13 !important;
	font-weight:bold;
	font-size:16px;
	color: black;
    width: 70%;	
	padding: 10px; 
	padding-left: 45px;
	padding-top: 16px;
	padding-bottom: 15px;
	text-align: left;	
	margin-bottom: 15px;	
	border-radius:7px;
	-webkit-border-radius:7px;
	-moz-border-radius:7px;	
	background-repeat:no-repeat;
}
.failurebox {
	background-image:url(../public/images/gen/error2.png);
	background-repeat:no-repeat;
	border: 2px solid #d30000; 
	background-color: #ffeee9; 
	padding: 10px; 
    width: 70%;
	padding-left: 50px;
    padding-bottom: 15px;
	padding-top: 16px;
	text-align: left;
	color:#d30000;
	margin-bottom: 15px;
	border-radius:7px;
	-webkit-border-radius:7px;
	-moz-border-radius:7px;	
}
.failurebox_onduplicate {
	background-image:url(../public/images/gen/error2.png);
	background-repeat:no-repeat;
	border: 3px dashed #d30000; 
	background-color: #ffeee9; 
	padding: 10px; 
    width: 70%;
	padding-left: 50px;
    padding-bottom: 15px;
	padding-top: 16px;
	text-align: left;
	color:#d30000;
	margin-bottom: 15px;
	border-radius:7px;
	-webkit-border-radius:7px;
	-moz-border-radius:7px;	
}
</style>
    </head>
    <body>
    <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
        
         <!-- This div is used to indicate the original position of the scrollable fixed div. -->
<?php require_once HELPERS_DIR .'logged-nav.p.inc';?>
<div id="middle" style="margin-top: 30px;">
<div id="middle_container" class="rounded7">
<div id="login_options" style="margin-top: -40px;">
<div class="fl"><?=  usrlogin::swelcome()?></a></div>

<?php 
//require_once HELPERS_DIR .'user_profile_menu.inc'; 

Fm_User::load_customer_left_bardata($custid);
Fm_User::update_customer_id($custid); 
?>
<script type="text/javascript">
      $.noConflict();
		jQuery(document).ready(function($) {
           $(function()
           {
            $(".postcode").geocomplete();
            $(".address1").geocomplete();
            $(".address2").geocomplete();
           });     
		
  
        });//end script       
</script>




<div class="clear"></div>
</div>
</div> 
<?php 
require_once HELPERS_DIR .'footer_content.php'; 
require_once HELPERS_DIR .'foot-main-content.php';
DatabaseHandler::Close();
// Output content from the buffer
//flush();
//ob_flush();
//ob_end_clean();
?>   
    
    
   
    
    
    


