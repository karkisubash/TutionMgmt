<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admission</title>
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
		var password=document.admissionform.pword.value;
		var rpassword=document.admissionform.rpword.value;
		
		if(password===cpassword){
		
			document.getElementById('message').innerHTML="password match";
		}else{
		
			document.getElementById('message').innerHTML="password doesn't match";
		}
		
		}
		
		function FrmVal1(){
			var phone = document.admissionform.contact.value;
			var phoneNum = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
			
			if(phone.match(phoneNum)){
				document.getElementById('msz').innerHTML = "valid number";
				return true;
			}else{
				document.getElementById('msz').innerHTML = "Invalid Phone Number";
			}
		}

		 function pass() {

          var pword=document.admissionform.pword.value;
       

          if(pword.length<8){
		  
 
         document.getElementById('pwordMessage').innerHTML='please enter password greater than 8 letter';
                  
        }else{
          document.getElementById('pwordMessage').innerHTML='';
        }
    }
</script>
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
</div>
<div id="Layer2" style="position:relative;text-align:center;width:100%;height:532px;float:left;clear:left;display:block;z-index:4;">
<div id="Layer2_Container" style="width:970px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
</div>
<div>
<article>
				<div class="transbox">
					<h1> ADMISSION</h1>
					<font color="#77F013" size="+2" face="arial black">
						<form name="admissionform" action="<?php echo base_url();?>mainControl/admit" method="post">
							Firstname:
							<input type="text" id="fname" name="fname" placeholder="Enter your Firstname"/><br/>
							Lastname:
							<input type="text" id="lname" name="lname" placeholder="Enter your Lastname"/><br/>
							Contact:
							<input type="text" id="contact" name="contact" placeholder="Enter your Contact"/><br/>
							username:
							<input type="text" id="uname" name="uname" placeholder="Enter your username"/><br/>
							password:
							<input type="password" id="pword" name="pword" placeholder="Enter your Password"/><br/>
							Re-enter 
							<input type="password" id="rpword" name="rpword" placeholder="Re-enter your Password"/><br/>
							Address:
							<input type="text" id="address" name="address" placeholder="Enter your Address"/><br/>
							Email:
							<input type="text" id="email" name="email" placeholder="Enter your Email"/><br/>
							
							Course:
							<select name ="course_id" onchange="fetch_select(this.value);">
								<option value="">Select</option>
								<?php if(count($get_course)):?>
							 		<?php foreach($get_course as $course):?>
							 			<option value="<?php echo $course->course_id;?>"><?php echo $course->coursename;?>
							 			</option>
								<?php endforeach;?>
								<?php else:?>
								<?php endif;?>
								
								</select>
								<br/>

							<input type="submit" value="Admit Student"/><br/><br/>
							<a href="<?php echo base_url('direct/adminDashboard')?>"><img src="<?php echo base_url('assets/images/img0019.png')?>"></a>
						
						
						</form>
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