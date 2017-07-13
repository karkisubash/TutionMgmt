
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Bookings</title>
<link href="<?php echo base_url('assets/TIMS.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/teacher.css')?>" rel="stylesheet">
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
<div id="Layer1" style="position:relative;text-align:center;width:100%;height:88px;float:left;clear:left;display:block;z-index:7;">
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
<div id="Layer2" style="position:relative;text-align:center;width:100%;height:598px;float:left;clear:left;display:block;z-index:8;">
<div id="Layer2_Container" style="width:970px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="wb_Text1" style="position:absolute;left:467px;top:56px;width:242px;height:51px;z-index:2;">
</div>

<div>
<form action="<?php echo base_url();?>mainControl/viewBook" class="Details" method="post">
<!-- Student Name:   <input type="text" id="name" name="sname" placeholder="Enter Student Name"/>
<input type="submit" value="VIEW"/>
</form> -->


<table border="1px solid black" style="width: 100%;text-align: left;height: 50px;padding: 15px;border-collapse: collapse;">
<center>
<thead style="background-color: #4CAF50;color: white;padding: 15px;text-align: left;">
	<th>First Name</th>
	<th>Last Name</th>
	<th>Contact</th>
	<th>Address</th>
	<th>Email</th>
	<th>Course</th>
</thead>
<tbody>
<?php
	foreach($arr as $row):
?>
	<tr style="height: 30px;vertical-align: bottom;padding: 15px;text-align: left;">
		<!--value of database table stored in the table-->
		<td><?=$row->firstname?></td>
		<td><?=$row->lastname?></td>
		<td><?=$row->contact?></td>
		<td><?=$row->address?></td>
		<td><?=$row->email?></td>
		<td><?=$row->coourse_id?></td>
	</tr>
<?php
	endforeach;
?>
</tbody>
</center>
</div>

<!-- <a href="<?php echo base_url('direct/addteacher')?>"><input type="submit" id="Button1" name="add" value="ADD NEW TEACHERS" style="position:absolute;left:499px;top:146px;width:178px;height:49px;z-index:4;"></a> -->
<a href="<?php echo base_url('direct/adminDashboard')?>"><img src="<?php echo base_url('assets/images/img0019.png')?>" id="MergedObject10" alt="" title="" style="border-width:0;position:absolute;left:695px;top:409px;width:170px;height:45px;z-index:5"></a>
</div>
</div>
<div id="PageFooter1" style="position:absolute;overflow:hidden;text-align:left;left:0px;top:687px;width:100%;height:102px;z-index:9;">
<div id="wb_Text8" style="position:absolute;left:214px;top:12px;width:495px;height:34px;text-align:center;z-index:6;">
<span style="color:#000000;font-family:Arial;font-size:13px;"><br></span><span style="color:#808080;font-family:Arial;font-size:16px;">Copyright © 2017 Kathmandu TIMS | Privacy policy</span></div>
</div>
</body>
</html>