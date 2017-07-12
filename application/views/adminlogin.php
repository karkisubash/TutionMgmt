<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin LOGIN</title>
<link href="<?php echo base_url();?>assets/TIMS.css" media="screen" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/LOGIN.css" media="screen" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="Layer1" style="position:relative;text-align:center;width:100%;height:88px;float:left;clear:left;display:block;z-index:11;">
<div id="Layer1_Container" style="width:970px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="wb_Image1" style="position:absolute;left:26px;top:1px;width:69px;height:87px;z-index:6;">
<a href="./index.html"><img src="<?php echo base_url('assets/images/LOGO1.png')?>" id="Image1" alt=""></a></div>
<div id="wb_CssMenu1" style="position:absolute;left:135px;top:25px;width:764px;height:63px;text-align:right;z-index:7;">

<ul>
<li class="firstmain"><a href="<?php echo site_url('direct/index')?>" target="_self">HOME</a>
</li>
<li><a href="<?php echo site_url('direct/adminlogin')?>" target="_self">ADMIN</a>
</li>
<li><a href="<?php echo base_url('mainControl/viewEvent')?>" target="_self">EVENTS</a>
</li>
<li><a href="<?php echo site_url('direct/login')?>" target="_self">LOGIN</a>
</li>
<li><a href="<?php echo site_url('direct/register')?>" target="_self">SIGNUP</a>
</li>
<li><a href="<?php echo site_url('direct/contact')?>" target="_self">CONTACT</a>
</li>
</ul>
</div>
</div>
</div>

<div id="wb_Form1" style="position:absolute;left:185px;top:213px;width:529px;height:418px;z-index:9;">
<form name="LOGIN_FORM" method="post" action="<?php echo base_url('mainControl/login_validation')?>">
<span style="color:#000000;font-family:Arial;font-size:53px;"><strong>ADMIN LOGIN</strong></span><br/><br/>
USERNAME:<br/>
<input type="text" name="username" placeholder="Enter your Username"/><br/><br/>
Password:<br/>
<input type="password" name="pwd" placeholder="Enter your Password"/><br/></br>
<input type="submit" name="Login" value="LOGIN" />
<!-- <form name="LOGIN_FORM" method="post" action="<?php echo base_url('mainControl/login_validation')?>" enctype="text/plain" id="Form1">
<div id="wb_Text1" style="position:absolute;left:16px;top:0px;width:472px;height:62px;z-index:0;">
<span style="color:#000000;font-family:Arial;font-size:53px;"><strong>LOGIN</strong></span></div>
<label for="" id="Label1" style="position:absolute;left:16px;top:101px;width:136px;height:74px;line-height:74px;z-index:1;">USERNAME</label>
<label for="" id="Label2" style="position:absolute;left:16px;top:183px;width:136px;height:74px;line-height:74px;z-index:2;">PASSWORD</label>
<input type="text" id="Editbox1" style="position:absolute;left:197px;top:123px;width:298px;height:25px;line-height:25px;z-index:3;" name="username" value="" spellcheck="false" placeholder="Please enter your username">
<input type="password" id="Editbox2" style="position:absolute;left:197px;top:207px;width:298px;height:25px;line-height:25px;z-index:4;" name="pwd" value="" spellcheck="false" placeholder="Please enter your Password">
<input type="submit" id="Button1" name="login" value="LOGIN" style="position:absolute;left:185px;top:292px;width:135px;height:42px;z-index:5;">
</form> -->
<!-- <?php
	echo validation_errors();
?> -->
</form>
</div>
<div id="PageFooter1" style="position:absolute;overflow:hidden;text-align:left;left:0px;top:908px;width:100%;height:90px;z-index:10;">
</div>

<div id="PageFooter2" style="position:absolute;overflow:hidden;text-align:left;left:0px;top:908px;width:100%;height:90px;z-index:12;">
</div>
</body>
</html>