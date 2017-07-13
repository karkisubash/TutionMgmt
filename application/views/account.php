<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ACCOUNT</title>
<link href="base/jquery-ui.min.css" rel="stylesheet">
<link href="<?php echo base_url('assets/TIMS.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/account.css')?>" rel="stylesheet">
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
<script>
var myWindow;

function openWin() {
    myWindow = window.open("bill", "bill", "width=200,height=100");
    //myWindow.document.write("<p>INVOICE</p>");

}

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

<form method="post" action="<?php echo base_url('mainControl/saveAccount')?>">
<label for="" id="Label1" style="position:absolute;left:0px;top:50px;width:364px;height:73px;line-height:73px;z-index:2;">Fee Payment</label>
<label id="Label7" style="position:absolute;left:0px;top:130px;width:88px;height:46px;line-height:46px;z-index:15;">DATE:</label>
<input type="date" name="date" id="Editbox1" style="position:absolute;left:214px;top:130px;width:195px;height:48px;line-height:48px;z-index:16;">
<label for="" id="Label2" style="position:absolute;left:0px;top:220px;width:180px;height:46px;line-height:46px;z-index:3;">SELECT STUDENT</label>
<select id="cmbStudent" name="cmbStudent" onchange="fetch_select(this.value);" style="position:absolute;left:214px;top:220px;width:195px;height:59px;z-index:4;">
<option value="">Select Name</option>
								<?php if(count($getname)):?>
							 		<?php foreach($getname as $name):?>
							 			<option value="<?php echo $name->firstname;?>"><?php echo $name->firstname;?> 
							 			</option>
								<?php endforeach;?>
								<?php else:?>
								<?php endif;?>
</select><br/>


<label for="" id="Label3" style="position:absolute;left:0px;top:310px;width:186px;height:54px;line-height:54px;z-index:5;">Course</label>
<select name ="course_id" onchange="fetch_select(this.value);" style="position:absolute;left:214px;top:310px;width:195px;height:58px;z-index:6;">
								<option value="">Select Course</option>
						
							 		<?php foreach($course as $course):?>
							 			<option value="<?php echo $course->coursename;?>"><?php echo $course->coursename;?>
							 			</option>
							 			<?php
							 			endforeach;
							 			?>
							 			</select>
<br/>
<label for="" id="Label3" style="position:absolute;left:0px;top:400px;width:186px;height:54px;line-height:54px;z-index:5;">Amount Paid</label>
<input type="text" name="amount" id="Editbox1" style="position:absolute;left:214px;top:400px;width:195px;height:58px;z-index:6;">
<br/>

<input type="submit" value="SAVE" id="jQueryButton1" style="position:absolute;left:10px;top:525px;width:170px;height:58px;z-index:7;"" >
</form>

<!-- <a href="<?php echo base_url('direct/adminDashboard')?>"> -->

<a href="<?php echo base_url('direct/adminDashboard')?>"><button type="submit" id="jQueryButton3" name="back" value="BACK" style="position:absolute;left:330px;top:600px;width:184px;height:62px;z-index:14;">BACK</button></a>

</div>
</div>
<div id="PageFooter1" style="position:absolute;overflow:hidden;text-align:left;left:0px;top:776px;width:100%;height:102px;z-index:20;">
<div id="wb_Text8" style="position:absolute;left:214px;top:12px;width:495px;height:34px;text-align:center;z-index:17;">
<span style="color:#000000;font-family:Arial;font-size:13px;"><br></span><span style="color:#808080;font-family:Arial;font-size:16px;">Copyright © 2017 Kathmandu TIMS | Privacy policy</span></div>
</div>
</body>
</html>


