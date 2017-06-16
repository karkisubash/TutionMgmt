<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>

<link href="<?php echo base_url();?>assets/TIMS.css" media="screen" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/Register.css" media="screen" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="Layer1" style="position:relative;text-align:center;width:100%;height:88px;float:left;clear:left;display:block;z-index:25;">
<div id="Layer1_Container" style="width:970px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="wb_Image1" style="position:absolute;left:26px;top:1px;width:69px;height:87px;z-index:19;">
<a href="./index.html"><img src="<?php echo base_url('assets/images/LOGO1.png');?>" id="Image1" alt=""></a></div>
<div id="wb_CssMenu1" style="position:absolute;left:135px;top:25px;width:764px;height:63px;text-align:right;z-index:20;">
<ul>
<li class="firstmain"><a href="<?php echo site_url('direct/index')?>" target="_self">HOME</a>
</li>
<li><a href="<?php echo site_url('direct/login')?>" target="_self">ADMIN</a>
</li>
<li><a href="#" target="_self">EVENTS</a>
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
<article>
				<div class="transbox">
					<h1> Sign Up</h1>
					<font color="#77F013" size="+2" face="arial black">
						<form action="<?php echo base_url();?>mainControl/register" method="post">
							Firstname:<br/>
							<input type="text" id="fname" name="fname" placeholder="Enter your Firstname"/><br/><br/>
							Lastname:<br/>
							<input type="text" id="lname" name="lname" placeholder="Enter your Lastname"/><br/><br/>
							Address:<br/>
							<input type="text" id="address" name="address" placeholder="Enter your Address"/><br/><br/>
							Contact:<br/>
							<input type="text" id="contact" name="contact" placeholder="Enter your Contact"/><br/><br/>
							Email:<br/>
							<input type="text" id="email" name="email" placeholder="Enter your Email"/><br/><br/>
							username:<br/>
							<input type="text" id="uname" name="uname" placeholder="Enter your username"/><br/><br/>
							password:<br/>
							<input type="text" id="pword" name="pword" placeholder="Enter your Password"/><br/><br/>
							<input type="submit" value="Create USER"/>
							<a href="<?php echo site_url('direct/login')?>">LOGIN</a></br>
						
						</form>
					</font>
				</div>	
		</article>
<div id="PageFooter1" style="position:absolute;overflow:hidden;text-align:left;left:0px;top:886px;width:100%;height:102px;z-index:26;">
<div id="wb_Text8" style="position:absolute;left:214px;top:12px;width:495px;height:34px;text-align:center;z-index:21;">
<span style="color:#000000;font-family:Arial;font-size:13px;"><br></span><span style="color:#808080;font-family:Arial;font-size:16px;">Copyright © 2017 Kathmandu TIMS | Privacy policy</span></div>
</div>
</body>
</html>