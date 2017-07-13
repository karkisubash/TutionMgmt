<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ATTENDANCE</title>
<link href="base/jquery-ui.min.css" rel="stylesheet">
<link href="<?php echo base_url('assets/TIMS.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/attendance.css')?>" rel="stylesheet">
<script src="jquery-1.12.4.min.js"></script>
<script src="wb.parallax.min.js"></script>
<script src="jquery-ui.min.js"></script>
<script>
$(document).ready(function()
{
   $('#Layer2').parallax();
   $("#jQueryButton1").button();
   $("#jQueryButton2").button();
   $("#jQueryButton3").button({ icon: 'ui-icon-caret-1-n', iconPosition: 'beginning' });
});
</script>
</head>
<body>
<div id="Layer1" style="position:relative;text-align:center;width:100%;height:88px;float:left;clear:left;display:block;z-index:18;">
<div id="Layer1_Container" style="width:970px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="wb_Image1" style="position:absolute;left:26px;top:1px;width:69px;height:87px;z-index:0;">
<a href="<?php echo base_url('direct/adminDashboard')?>"><img src="<?php echo base_url('assets/images/LOGO1.png')?>" id="Image1" alt=""></a></div>
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
<div id="Layer2" style="position:relative;text-align:center;width:100%;height:688px;float:left;clear:left;display:block;z-index:19;">
<div id="Layer2_Container" style="width:970px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">

<form method="post" action="<?php echo base_url('mainControl/studentAttendance')?>">
<label for="" id="Label1" style="position:absolute;left:0px;top:129px;width:364px;height:73px;line-height:73px;z-index:2;">STUDENT ATTENDANCE</label>
<label id="Label7" style="position:absolute;left:0px;top:210px;width:88px;height:46px;line-height:46px;z-index:15;">DATE:</label>
<input type="date" name="date" id="Editbox1" style="position:absolute;left:214px;top:210px;width:195px;height:48px;line-height:48px;z-index:16;" >
<label for="" id="Label2" style="position:absolute;left:0px;top:329px;width:180px;height:46px;line-height:46px;z-index:3;">SELECT STUDENT</label>
<select name="cmbStudent" onchange="fetch_select(this.value);" style="position:absolute;left:214px;top:329px;width:195px;height:59px;z-index:4;">
<option value="">Select Name</option>
								<?php if(count($get_name)):?>
							 		<?php foreach($get_name as $name):?>
							 			<option value="<?php echo $name->sid;?>"><?php echo $name->firstname;?> 
							 			</option>
								<?php endforeach;?>
								<?php else:?>
								<?php endif;?>
</select><br/>
<label for="" id="Label3" style="position:absolute;left:0px;top:448px;width:186px;height:54px;line-height:54px;z-index:5;">PRESENT/ABSENT:</label>
<select name="spa" onchange="fetch_select(this.value);" size="1" id="Combobox2" style="position:absolute;left:214px;top:448px;width:195px;height:58px;z-index:6;">
<option>Present</option>
<option>Absent</option>
</select>
<br/><br/>
<input type="submit" value="SAVE" id="jQueryButton1" style="position:absolute;left:122px;top:525px;width:170px;height:58px;z-index:7;"" >
</form>

<form method="post" action="<?php echo base_url('mainControl/teacherAttendance')?>">
<label for="" id="Label4" style="position:absolute;left:444px;top:136px;width:379px;height:59px;line-height:59px;z-index:8;">TEACHER ATTENDANCE</label>
<label  id="Label5" style="position:absolute;left:444px;top:208px;width:210px;height:49px;line-height:49px;z-index:9;">DATE:</label>
<input type="date" name="tdate" id="Editbox1" style="position:absolute;left:667px;top:208px;width:210px;height:48px;line-height:48px;z-index:16;"><br/>
<label  id="Label5" style="position:absolute;left:444px;top:329px;width:210px;height:49px;line-height:49px;z-index:9;">SELECT TEACHER:</label>
<select name="cmbTeacher" onchange="fetch_select(this.value);" size="1" id="Combobox3" style="position:absolute;left:662px;top:329px;width:215px;height:60px;z-index:10;">
<option value="">Select Name</option>
								<?php if(count($getTeacherName)):?>
							 		<?php foreach($getTeacherName as $tname):?>
							 			<option value="<?php echo $tname->tid;?>"><?php echo $tname->firstname;?> 
							 			</option>
								<?php endforeach;?>
								<?php else:?>
								<?php endif;?>
</select><br/>
<label for="" id="Label6" style="position:absolute;left:444px;top:448px;width:185px;height:60px;line-height:60px;z-index:12;">PRESENT/ABSENT:</label>
<select name="tpa" onchange="fetch_select(this.value);" style="position:absolute;left:662px;top:448px;width:213px;height:58px;z-index:11;">
<option>Present</option>
<option>Absent</option>
</select>
<br/><br/>
<input type="submit" value="SAVE"  id="jQueryButton3" style="position:absolute;left:550px;top:541px;width:184px;height:62px;z-index:14;">
</form>
<a href="<?php echo base_url('direct/adminDashboard')?>"><button type="submit" id="jQueryButton3" name="back" value="BACK" style="position:absolute;left:330px;top:600px;width:184px;height:62px;z-index:14;">BACK</button></a>









<!-- <label for="" id="Label7" style="position:absolute;left:534px;top:17px;width:88px;height:46px;line-height:46px;z-index:15;">DATE</label>
<input type="date" name="date" id="Editbox1" style="position:absolute;left:667px;top:13px;width:253px;height:48px;line-height:48px;z-index:16;" >

<label for="" id="Label1" style="position:absolute;left:0px;top:129px;width:364px;height:73px;line-height:73px;z-index:2;">STUDENT ATTENDANCE</label>

<label for="" id="Label2" style="position:absolute;left:0px;top:212px;width:180px;height:46px;line-height:46px;z-index:3;">SELECT STUDENT</label>

<select name="cmbStudent" style="position:absolute;left:214px;top:207px;width:195px;height:59px;z-index:4;" onchange="fetch_select(this.value);">
<option value="">Select Name</option>
								<?php if(count($get_name)):?>
							 		<?php foreach($get_name as $name):?>
							 			<option value="<?php echo $name->sid;?>"><?php echo $name->firstname;?> 
							 			</option>
								<?php endforeach;?>
								<?php else:?>
								<?php endif;?>
</select>

<label for="" id="Label3" style="position:absolute;left:0px;top:329px;width:186px;height:54px;line-height:54px;z-index:5;">PRESENT/ABSENT</label>

<select name="spa" size="1" id="Combobox2" style="position:absolute;left:214px;top:322px;width:195px;height:58px;z-index:6;" onchange="fetch_select(this.value);">
<option>PRESENT</option>
<option>ABSENT</option>
</select>

<a href="<?php echo base_url('mainControl/studentAttendance')?>"><button type="submit" id="jQueryButton1" name="save" value="SAVE" style="position:absolute;left:122px;top:425px;width:170px;height:58px;z-index:7;">SAVE</button></a>

<label for="" id="Label4" style="position:absolute;left:444px;top:136px;width:379px;height:59px;line-height:59px;z-index:8;">TEACHER ATTENDANCE</label>

<label for="" id="Label5" style="position:absolute;left:444px;top:208px;width:210px;height:49px;line-height:49px;z-index:9;">SELECT TEACHER</label>
<select name="cmbTeacer" size="1" id="Combobox3" style="position:absolute;left:662px;top:209px;width:215px;height:60px;z-index:10;">
</select>
<select name="tpa" size="1" id="Combobox4" style="position:absolute;left:662px;top:322px;width:213px;height:58px;z-index:11;">
<option>PRESENT</option>
<option>ABSENT</option>
</select>
<label for="" id="Label6" style="position:absolute;left:444px;top:319px;width:185px;height:60px;line-height:60px;z-index:12;">PRESENT/ABSENT</label>
<a href="<?php echo base_url('mainControl/teacherAttendance')?>"><button type="submit" id="jQueryButton2" name="saveT" value="SAVE" style="position:absolute;left:556px;top:425px;width:183px;height:58px;z-index:13;">SAVE</button></a>
<button type="submit" id="jQueryButton3" name="back" value="BACK" style="position:absolute;left:372px;top:541px;width:184px;height:62px;z-index:14;">BACK</button> -->

</div>
</div>
<div id="PageFooter1" style="position:absolute;overflow:hidden;text-align:left;left:0px;top:776px;width:100%;height:102px;z-index:20;">
<div id="wb_Text8" style="position:absolute;left:214px;top:12px;width:495px;height:34px;text-align:center;z-index:17;">
<span style="color:#000000;font-family:Arial;font-size:13px;"><br></span><span style="color:#808080;font-family:Arial;font-size:16px;">Copyright © 2017 Kathmandu TIMS | Privacy policy</span></div>
</div>
</body>
</html>