<?php

if(!isset($this->session->userdata['sess_id'])){

redirect('direct/studentlogin');
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Student Dashboard</title>
<link href="<?php echo base_url();?>assets/TIMS.css" media="screen" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/studentdashboard.css" media="screen" rel="stylesheet" type="text/css"/>
<script src="jquery-1.12.4.min.js"></script>
<script src="wb.parallax.min.js"></script>
<script>
$(document).ready(function()
{
   $('#Layer5').parallax();
});
</script>
</head>
<body>
<div id="Layer1" style="position:relative;text-align:center;width:100%;height:88px;float:left;clear:left;display:block;z-index:16;">
<div id="Layer1_Container" style="width:970px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="wb_Image1" style="position:absolute;left:26px;top:1px;width:69px;height:87px;z-index:0;">
<a href="<?php echo base_url('direct/studentdashboard')?>"><img src="<?php echo base_url('assets/images/LOGO1.png')?>" id="Image1" alt=""></a></div>
<div id="wb_CssMenu1" style="position:absolute;left:135px;top:25px;width:764px;height:63px;text-align:right;z-index:1;">
<ul>
<li class="firstmain"><a href="<?php echo base_url('direct/studentdashboard')?>" target="_self">HOME</a>
</li>
<li><a href="<?php echo base_url('studentFunctions/attendance')?>" target="_self">ATTENDANCE</a>
</li>
<li><a href="<?php echo base_url('studentFunctions/logout')?>" target="_self">LOGOUT</a>
</li>
</ul>
</div>
</div>
</div>
<div id="Layer5" style="position:relative;text-align:center;width:100%;height:510px;float:left;clear:left;display:block;z-index:17;">
<div id="Layer5_Container" style="width:970px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="Layer2" style="position:absolute;text-align:left;left:354px;top:96px;width:260px;height:267px;z-index:8;">
<div id="wb_Text3" style="position:absolute;left:45px;top:53px;width:170px;height:135px;text-align:center;z-index:5;">
<span style="color:#0000CD;font-family:'Comic Sans MS';font-size:19px;"><strong>View your personal details, your account details and your attendance.</strong></span></div>
</div>
<div id="Layer4" style="position:absolute;text-align:left;left:681px;top:94px;width:254px;height:271px;z-index:9;">
<div id="wb_Text4" style="position:absolute;left:42px;top:55px;width:170px;height:108px;text-align:center;z-index:6;">
<span style="color:#0000CD;font-family:'Comic Sans MS';font-size:19px;"><strong>Download the study materials provided by the institute</strong></span></div>
</div>
<div id="Layer3" style="position:absolute;text-align:left;left:13px;top:96px;width:267px;height:267px;z-index:10;">
<div id="wb_Text1" style="position:absolute;left:11px;top:65px;width:193px;height:2px;z-index:7;">
<span style="color:#000000;font-family:Arial;font-size:8px;">L</span></div>
</div>
<div id="wb_ClipArt2" style="position:absolute;left:435px;top:50px;width:100px;height:78px;z-index:11;">
<a href="<?php echo base_url('studentFunctions/showStudent')?>"><img class="hover" src="<?php echo base_url('assets/images/img0001_hover.png')?>" alt="" style="border-width:0;width:100px;height:78px;"><span><img src="<?php echo base_url('assets/images/img0001.png')?>" id="ClipArt2" alt="" style="width:100px;height:78px;"></span></a></div>
<div id="wb_ClipArt1" style="position:absolute;left:96px;top:53px;width:103px;height:72px;z-index:12;">

<a href="<?php echo base_url('studentFunctions/studentView')?>"><img class="hover" src="<?php echo base_url('assets/images/img0005_hover.png')?>" alt="" style="border-width:0;width:103px;height:72px;"><span><img src="<?php echo base_url('assets/images/img0005.png')?>" id="ClipArt1" alt="" style="width:103px;height:72px;"></span></a></div>

<div id="wb_ClipArt3" style="position:absolute;left:782px;top:38px;width:79px;height:74px;z-index:13;">
<a href=""><img class="hover" src="<?php echo base_url('assets/images/img0006_hover.png')?>" alt="" style="border-width:0;width:79px;height:74px;"><span><img src="<?php echo base_url('assets/images/img0006.png')?>" id="ClipArt3" alt="" style="width:79px;height:74px;"></span></a></div>
<div id="wb_Text2" style="position:absolute;left:65px;top:153px;width:170px;height:135px;text-align:center;z-index:14;">
<span style="color:#0000CD;font-family:'Comic Sans MS';font-size:19px;"><strong>Edit your personal details and provide us the up to date information.</strong></span></div>
</div>
</div>
<div id="PageFooter1" style="position:absolute;overflow:hidden;text-align:left;left:0px;top:598px;width:100%;height:102px;z-index:18;">
<div id="wb_Text8" style="position:absolute;left:214px;top:12px;width:495px;height:34px;text-align:center;z-index:15;">
<span style="color:#000000;font-family:Arial;font-size:13px;"><br></span><span style="color:#808080;font-family:Arial;font-size:16px;">Copyright © 2017 Kathmandu TIMS | Privacy policy</span></div>
</div>
</body>
</html>