<?php

if(!isset($this->session->userdata['id'])){

redirect('direct/studentlogin');
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Dashboard</title>
<link href="<?php echo base_url('assets/TIMS.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/adminDashboard.css')?>" rel="stylesheet">
<script src="jquery-1.12.4.min.js"></script>
<script src="wb.parallax.min.js"></script>
<script>
$(document).ready(function()
{
   $('#Layer2').parallax();
});
</script>
</head>
<body>
<div id="Layer1" style="position:relative;text-align:center;width:100%;height:88px;float:left;clear:left;display:block;z-index:10;">
<div id="Layer1_Container" style="width:970px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="wb_Image1" style="position:absolute;left:26px;top:1px;width:69px;height:87px;z-index:0;">
<a href="./index.html"><img src="<?php echo base_url('assets/images/LOGO1.png')?>" id="Image1" alt=""></a></div>
<div id="wb_CssMenu1" style="position:absolute;left:135px;top:25px;width:764px;height:63px;text-align:right;z-index:1;">
<ul>
<li class="firstmain"><a href="<?php echo base_url('direct/adminDashboard')?>" target="_self">HOME</a>
</li>
<li><a href="<?php echo base_url('mainControl/viewStudent')?>" target="_self">STUDENTS</a>
</li>
<li><a href="<?php echo base_url('mainControl/viewTeacher')?>" target="_self">TEACHERS</a>
</li>
<li><a href="<?php echo base_url('mainControl/name')?>" target="_self">ACCOUNT</a>
</li>
<li><a href="<?php echo base_url('mainControl/viewCourse')?>" target="_self">COURSES</a>
</li>
<li><a href="<?php echo base_url('mainControl/logout')?>" target="_self">LOGOUT</a>
</li>
</ul>
</div>
</div>
</div>
<div id="Layer2" style="position:relative;text-align:center;width:100%;height:595px;float:left;clear:left;display:block;z-index:11;">
<div id="Layer2_Container" style="width:970px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">

<a href="<?php echo base_url('mainControl/courseDropDown')?>"><img src="<?php echo base_url('assets/images/img0012.png')?>" id="admission" alt="" title="" style="border-width:0;position:absolute;left:135px;top:104px;width:124px;height:122px;z-index:2"></a>

<a href="<?php echo base_url('mainControl/cmbName')?>"><img src="<?php echo base_url('assets/images/img0013.png')?>" id="attendance" alt="" title="" style="border-width:0;position:absolute;left:412px;top:104px;width:155px;height:122px;z-index:3">

<div id="wb_Image6" style="position:absolute;left:592px;top:279px;width:78px;height:98px;z-index:4;">
<a href="<?php echo base_url('mainControl/name')?>"><img src="<?php echo base_url('assets/images/account.png')?>" id="Image6" alt=""></a></div>

<a href="<?php echo base_url('mainControl/viewTeacher')?>"><img src="<?php echo base_url('assets/images/img0014.png')?>" id="teacher" alt="" title="" style="border-width:0;position:absolute;left:265px;top:279px;width:141px;height:138px;z-index:5"></a>

<div id="wb_Text6" style="position:absolute;left:583px;top:392px;width:116px;height:52px;z-index:6;">
<span style="color:#FFFF00;font-family:'Palatino Linotype';font-size:19px;"><strong>ACCOUNTS</strong></span></div>

<a href="<?php echo base_url('mainControl/viewStudent')?>"><img src="<?php echo base_url('assets/images/img0015.png')?>" id="student" alt="" title="" style="border-width:0;position:absolute;left:699px;top:99px;width:153px;height:127px;z-index:7"></a>

<a href="<?php echo base_url('mainControl/logout')?>"><img src="<?php echo base_url('assets/images/img0011.png')?>" id="logout" alt="" title="" style="border-width:0;position:absolute;left:756px;top:504px;width:170px;height:45px;z-index:8"></a>
<a href="<?php echo base_url('direct/eventUpdate')?>"><button type="submit" id="jQueryButton3" name="back" value="Update events" style="position:absolute;left:372px;top:500px;width:184px;height:62px;z-index:14;">UPDATE EVENTS</button></a>

<a href="<?php echo base_url('mainControl/nameForExam')?>"><button type="submit" id="jQueryButton3" name="back" value="Update events" style="position:absolute;left:10px;top:500px;width:184px;height:62px;z-index:14;">Exam Records</button></a>

</div>
</div>
<div id="PageFooter1" style="position:absolute;overflow:hidden;text-align:left;left:0px;top:683px;width:100%;height:102px;z-index:12;">
<div id="wb_Text8" style="position:absolute;left:214px;top:12px;width:495px;height:34px;text-align:center;z-index:9;">
<span style="color:#000000;font-family:Arial;font-size:13px;"><br></span><span style="color:#808080;font-family:Arial;font-size:16px;">Copyright © 2017 Kathmandu TIMS | Privacy policy</span></div>
</div>
</body>
</html>