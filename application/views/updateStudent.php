<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update Student</title>
<link href="<?php echo base_url('assets/TIMS.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/admission.css')?>" rel="stylesheet">
<script src="jquery-1.12.4.min.js"></script>
<script src="wb.parallax.min.js"></script>
<script>
$(document).ready(function()
{
   $('#Layer2').parallax();
});

</script>
</head>
<?php
if($arr->num_rows()>0){
	foreach ($arr->result() as $row) {
		# code...
?>
<!-- <?php

$hostname="localhost";
$username="root";
$password="";
$databaseName="tutionmgmt";

$connect=mysqli_connect($hostname,$username,$password,$databaseName);
$query="select * from tbl_course";

$result1=mysqli_query($connect,$query);
?> -->
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
</div>
<!-- <?php ?> -->
<div id="Layer2" style="position:relative;text-align:center;width:100%;height:532px;float:left;clear:left;display:block;z-index:4;">
<div id="Layer2_Container" style="width:970px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
</div>
<div>
<article>
				<div class="transbox">
					<h1> UPDATE STUDENT</h1>
					<font color="#77F013" size="+2" face="arial black">
						<form name="updateform" action="<?php echo base_url();?>mainControl/studentUpdate" method="post">
							<input type="hidden" value=<?php  echo $row->sid; ?> name="sid" class="form-control" id="id" required="required"/>
							Firstname:
							<input type="text" id="fname" name="firstname" value="<?php echo $row->firstname; ?>" /><br/>
							<!-- <select name ="firtsname">
								<option value="">Select Firstname</option>
								<?php if(count($get_firstname)):?>
							 		<?php foreach($get_firstname as $firstname):?>
							 			<option value="<?php echo $firstname->firstname;?>"><?php echo $firstname->firstname;?> 
							 			</option>
								<?php endforeach;?>
								<?php else:?>
								<?php endif;?>
								<br/><br/> -->
							Lastname:
							<input type="text" id="lname" name="lastname" value="<?php echo $row->lastname; ?>"/><br/>
							Contact:
							<input type="text" id="contact" name="phnNumber" value="<?php echo $row->contact; ?>" /><br/>
							Address:
							<input type="text" id="address" name="location" value="<?php echo $row->address; ?>"/><br/>
							Email:
							<input type="text" id="email" name="email" value="<?php echo $row->email; ?>"/><br/>
							
							Course:
							<select name="course">
							<?php while($row1=mysqli_fetch_array($result1)):;?>
								<option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>
								<?php echo $option;?>
							<?php endwhile;?>

							<!-- <select name ="course_id" onchange="fetch_select(this.value);>
								<option value="">SELECT</option>
								<?php if(count($get_course)):?>
							 		<?php foreach($get_course as $course):?>
							 			<option value="<?php echo $course->course_id;?>"><?php echo $course->coursename;?>
							 			</option>
								<?php endforeach;?>
								<?php else:?>
								<?php endif;?> -->
								
								</select>
								<br/>

							<input type="submit" value="Update Student"/><br/><br/>
							<a href="<?php echo base_url('direct/adminDashboard')?>"><img src="<?php echo base_url('assets/images/img0019.png')?>"></a>
						
						
						</form>
						<?php
					}
				}
				?>
					</font>
				</div>	
		</article>

</div>

</div>
<div id="PageFooter1" style="display:inline-block;position:relative;overflow:hidden;text-align:left;width:100%;height:102px;z-index:5;">
<div id="wb_Text8" style="position:absolute;left:214px;top:12px;width:495px;height:34px;text-align:center;z-index:2;">
<span style="color:#000000;font-family:Arial;font-size:13px;"><br></span><span style="color:#808080;font-family:Arial;font-size:16px;">Copyright © 2017 Kathmandu TIMS | Privacy policy</span></div>
</div>
</div>
</body>
</html>


<!-- <div class="form-group">

   <label for="cat1">Exercise category:</label><br/>
   current category:<b><?php echo $schrow->cat1;?></b>
    <select class="form-control" id="cat1" name="cat1" onchange="fetch_select(this.value);">
<option><?php echo $schrow->cat1;?></option>
    <option>please select category</option>
   <?php
if($cat->num_rows() > 0){
foreach($cat->result() as $row){

  ?>
  
  <option><?php echo $row->catname; ?></option>
  
    <?php
}
}
?>
</select>
 </div> -->