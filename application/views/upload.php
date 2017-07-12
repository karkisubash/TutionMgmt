<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>File Upload</title>
<link href="<?php echo base_url();?>assets/TIMS.css" media="screen" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/page1.css" media="screen" rel="stylesheet" type="text/css"/>
<script src="jquery-1.12.4.min.js"></script>
<script>
$(document).ready(function()
{
   $("#FileUpload1 :file").on('change', function()
   {
      var input = $(this).parents('.input-group').find(':text');
      input.val($(this).val());
   });
});
</script>
</head>
<body>
<div id="Layer1" style="position:relative;text-align:center;width:100%;height:88px;float:left;clear:left;display:block;z-index:5;">
<div id="Layer1_Container" style="width:970px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="wb_Image1" style="position:absolute;left:26px;top:1px;width:69px;height:87px;z-index:0;">
<a href="<?php echo base_url('direct/studentdashboard')?>"><img src="<?php echo base_url('assets/images/LOGO1.png')?>" id="Image1" alt=""></a></div>
<div id="wb_CssMenu1" style="position:absolute;left:135px;top:25px;width:764px;height:63px;text-align:right;z-index:1;">
<ul>
<li class="firstmain"><a href="<?php echo base_url('direct/teacherdashboard')?>" target="_self">HOME</a>
</li>
<li><a href="<?php echo base_url('teacherActivity/showTeacher')?>" target="_self">ATTENDANCE</a>
</li>
<li><a href="<?php echo base_url('mainControl/viewEvents')?>" target="_self">EVENTS</a>
</li>
<li><a href="#" target="_self">UPLOAD</a>
</li>
<li><a href="<?php echo base_url('teacherActivity/logout')?>" target="_self">LOGOUT</a>
</li>
</ul>
</div>
</div>
</div>
<div id="Layer2" style="position:absolute;text-align:left;left:0px;top:88px;width:970px;height:960px;z-index:6;">
</div>
<div id="Layer3" style="position:absolute;text-align:left;left:2px;top:87px;width:968px;height:173px;z-index:7;">
<div id="FileUpload1" class="input-group" style="position:absolute;left:54px;top:73px;width:214px;height:44px;z-index:2;">


<form method="post" action="<?php echo base_url('teacherActivity/upload')?>" enctype="multipart/form-data">
File Name:<input type="text" name="name" placeholder="enter the name of file"></br></br>
<input type="file" name="userfile" ></br><br><br>
<input type="submit" value="UPLOAD">

</div>
</form>
<div id="wb_Text1" style="position:absolute;left:54px;top:9px;width:274px;height:45px;z-index:3;">
<span style="color:#000000;font-family:Impact;font-size:37px;"><strong>Upload Files</strong></span></div>
</div>
<div id="PageFooter1" style="position:absolute;overflow:hidden;text-align:left;left:0px;top:1048px;width:100%;height:102px;z-index:8;">
<div id="wb_Text8" style="position:absolute;left:214px;top:12px;width:495px;height:34px;text-align:center;z-index:4;">
<span style="color:#000000;font-family:Arial;font-size:13px;"><br></span><span style="color:#808080;font-family:Arial;font-size:16px;">Copyright © 2017 Kathmandu TIMS | Privacy policy</span></div>
</div>
</body>
</html>