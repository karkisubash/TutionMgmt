<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Student Details</title>
<link href="<?php echo base_url('assets/TIMS.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/viewdetails.css')?>" rel="stylesheet">
</head>
<body>
<div id="Layer1" style="position:relative;text-align:center;width:100%;height:88px;float:left;clear:left;display:block;z-index:3;">
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
<form action="<?php echo base_url();?>mainControl/viewStudent" method="post">
Student Name:   <input type="text" id="name" name="sname" placeholder="Enter Student Name"/>
<input type="submit" value="VIEW"/>
</form>
<table border="2">
<?php
?>
<thead>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Contact</th>
	<th>User Name</th>
	<th>Address</th>
	<th>Email</th>
</thead>
<tbody>
<?php
	foreach($datas as $row):
?>
	<tr>
		<td><?=$row->firstname?></td>
		<td><?=$row->lastname?></td>
		<td><?=$row->contact?></td>
		<td><?=$row->username?></td>
		<td><?=$row->address?></td>
		<td><?=$row->email?></td>
	</tr>
<?php
	endforeach;
?>
</tbody>
</div>
<a href="<?php echo base_url('direct/adminDashboard')?>"><img src="<?php echo base_url('assets/images/img0019.png')?>"></a>
<div id="PageFooter1" style="position:absolute;overflow:hidden;text-align:left;left:0px;top:841px;width:100%;height:102px;z-index:4;">
<div id="wb_Text8" style="position:absolute;left:214px;top:12px;width:495px;height:34px;text-align:center;z-index:2;">
<span style="color:#000000;font-family:Arial;font-size:13px;"><br></span><span style="color:#808080;font-family:Arial;font-size:16px;">Copyright © 2017 Kathmandu TIMS | Privacy policy</span></div>
</div>
</body>
</html>