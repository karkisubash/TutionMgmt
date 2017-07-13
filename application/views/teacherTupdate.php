<?php

if(!isset($this->session->userdata['sess_id'])){

redirect('direct/studentlogin');
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update</title>
<link href="<?php echo base_url('assets/TIMS.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/admission.css')?>" rel="stylesheet">
<script src="jquery-1.12.4.min.js"></script>
<script src="wb.parallax.min.js"></script>
<script>
$(document).ready(function()
{
   $('#Layer2').parallax();
});
function checkpwd(){
		var password=document.updateform.pword.value;
		var rpassword=document.updateform.rpword.value;
		
		if(password===cpassword){
		
			document.getElementById('message').innerHTML="password match";
		}else{
		
			document.getElementById('message').innerHTML="password doesn't match";
		}
		
		}
		
</script> 
</head>
<?php
foreach ($profile as $row){
?>
<body>
<div id="Layer1" style="position:relative;text-align:center;width:100%;height:88px;float:left;clear:left;display:block;z-index:3;">
<div id="Layer1_Container" style="width:970px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="wb_Image1" style="position:absolute;left:26px;top:1px;width:69px;height:87px;z-index:0;">
<a href="<?php echo base_url('direct/teacherdashboard')?>"><img src="<?php echo base_url('assets/images/LOGO1.png')?>" id="Image1" alt=""></a></div>
<div id="wb_CssMenu1" style="position:absolute;left:135px;top:25px;width:764px;height:63px;text-align:right;z-index:1;">
<ul>
<li class="firstmain"><a href="<?php echo base_url('direct/teacherdashboard')?>" target="_self">HOME</a>
</li>
<li><a href="<?php echo base_url('teacherActivity/showTeacher')?>" target="_self">ATTENDANCE</a>
</li>
<li><a href="<?php echo base_url('teacherActivity/logout')?>" target="_self">LOGOUT</a>
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
					<h1> UPDATE </h1>
					<font color="#77F013" size="+2" face="arial black">
						<form name="updateform" action="<?php echo base_url('teacherActivity/teacherModify');?>" method="post">
							<input type="hidden" value="<?php  echo $row->tid; ?>" name="tid" class="form-control" id="id" required="required"/>
							Firstname:
							<input type="text" id="fname" name="firstname" value="<?php echo $row->firstname; ?>" /><br/>
							Lastname:
							<input type="text" id="lname" name="lastname" value="<?php echo $row->lastname; ?>"/><br/>
							Contact:
							<input type="text" id="contact" name="contact" value="<?php echo $row->phnNumber; ?>" /><br/>
							username:
							<input type="text" id="username" name="uname" value="<?php echo $row->username; ?>"/><br/>
							password:
							<input type="password" id="password" name="pword" value="<?php echo $row->password; ?>"/><br/>
							Re-enter 
							<input type="password" id="rpword" name="rpword" placeholder="Re-enter your Password"/><br/>
							<input type="submit" value="Update"/><br/><br/>
							<a href="<?php echo base_url('direct/studentDashboard')?>"><img src="<?php echo base_url('assets/images/img0019.png')?>"></a>
						
						
						</form>
						<?php
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


