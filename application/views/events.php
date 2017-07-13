<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>EVENTS</title>
<link href="<?php echo base_url('assets/TIMS.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/events.css')?>" rel="stylesheet">
</head>
<body>
<input type="text" id="Editbox1" style="position:absolute;left:63px;top:217px;width:835px;height:465px;line-height:465px;z-index:3;" name="txtEvent" value="" spellcheck="false">
<input type="submit" id="Button1" name="back" value="BACK" style="position:absolute;left:786px;top:724px;width:147px;height:46px;z-index:4;">
<div id="Layer1" style="position:relative;text-align:center;width:100%;height:88px;float:left;clear:left;display:block;z-index:5;">
<div id="Layer1_Container" style="width:970px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="wb_Image1" style="position:absolute;left:26px;top:1px;width:69px;height:87px;z-index:0;">
<a href="<?php echo base_url('direct/index');?>"><img src="<?php echo base_url('assets/images/LOGO1.png');?>" id="Image1" alt=""></a></div>
<div id="wb_CssMenu1" style="position:absolute;left:135px;top:25px;width:764px;height:63px;text-align:right;z-index:1;">
<ul>
<li class="firstmain"><a href="<?php echo site_url('direct/index')?>" target="_self">HOME</a>
</li>
<li><a href="<?php echo site_url('direct/adminlogin')?>" target="_self">ADMIN</a>
</li>
<li><a href="<?php echo base_url('mainControl/viewEvent')?>" target="_self">EVENTS</a>
</li>
<li><a href="<?php echo site_url('direct/login')?>" target="_self">LOGIN</a>
</li>
<li><a href="<?php echo site_url('mainControl/courseInRegister')?>" target="_self">SIGNUP</a>
</li>
<li><a href="<?php echo site_url('direct/contact')?>" target="_self">CONTACT</a>
</li>
</ul>
</div>
</div>
</div>
<?php
	foreach($records as $news): 
?>

<div id="wb_Text1" style="position:absolute;left:72px;top:121px;width:317px;height:75px;z-index:6;">
<span style="color:#FF0000;font-family:Arial;font-size:64px;"><strong>EVENTS</strong></span></div>
<form method="post" action="<?php echo base_url('direct/index')?>">
<input type="text" id="Editbox1" style="position:absolute;left:63px;top:217px;width:1100px;height:465px;line-height:465px;z-index:3;" name="txtEvent" value="<?= $news->text?>" spellcheck="false">
<input type="submit" id="Button1" name="back" value="BACK" style="position:absolute;left:786px;top:724px;width:147px;height:46px;z-index:4;">
<?php
 	endforeach;
?>
<div id="PageFooter1" style="position:absolute;overflow:hidden;text-align:left;left:0px;top:806px;width:100%;height:102px;z-index:7;">
<div id="wb_Text8" style="position:absolute;left:214px;top:12px;width:495px;height:34px;text-align:center;z-index:2;">
<span style="color:#000000;font-family:Arial;font-size:13px;"><br></span><span style="color:#808080;font-family:Arial;font-size:16px;">Copyright © 2017 Kathmandu TIMS | Privacy policy</span></div>
</div>
</body>
</html>