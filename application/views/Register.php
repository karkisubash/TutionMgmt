<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>

<link href="<?php echo base_url();?>assets/TIMS.css" media="screen" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/Register.css" media="screen" rel="stylesheet" type="text/css"/>
</head>
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
<body>
<div id="Layer1" style="position:relative;text-align:center;width:100%;height:88px;float:left;clear:left;display:block;z-index:25;">
<div id="Layer1_Container" style="width:970px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="wb_Image1" style="position:absolute;left:26px;top:1px;width:69px;height:87px;z-index:19;">
<a href="<?php echo base_url('direct/index')?>""><img src="<?php echo base_url('assets/images/LOGO1.png')?>" id="Image1" alt=""></a></div>
<div id="wb_CssMenu1" style="position:absolute;left:135px;top:25px;width:764px;height:63px;text-align:right;z-index:20;">
<ul>
<li class="firstmain"><a href="<?php echo site_url('direct/index')?>" target="_self">HOME</a>
</li>
<li><a href="<?php echo site_url('direct/adminlogin')?>" target="_self">ADMIN</a>
</li>
<li><a href="<?php echo base_url('mainControl/viewEvent')?>" target="_self">EVENTS</a>
</li>
<li><a href="<?php echo site_url('direct/login')?>" target="_self">LOGIN</a>
</li>
<li><a href="<?php echo site_url('mainControl/courseInRegister')?>" target="_self">SIGNUP</a>
</li>
<li><a href="<?php echo site_url('direct/contact')?>" target="_self">CONTACT</a>
</li>
</ul>
</div>
</div>
</div>
<div>
<article>
				<div class="transbox">
					<h1> Sign Up</h1>
					<font color="#77F013" size="+2" face="arial black">
						<form name="admissionform" action="<?php echo base_url();?>mainControl/signUp" method="post">
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

							<input type="submit" value="SIGNUP"/><br/><br/>
							
						
						
						</form>
					</font>
				</div>	
		</article>

</div>
<div id="PageFooter1" style="position:absolute;overflow:hidden;text-align:left;left:0px;top:886px;width:100%;height:102px;z-index:26;">
<div id="wb_Text8" style="position:absolute;left:214px;top:12px;width:495px;height:34px;text-align:center;z-index:21;">
<span style="color:#000000;font-family:Arial;font-size:13px;"><br></span><span style="color:#808080;font-family:Arial;font-size:16px;">Copyright © 2017 Kathmandu TIMS | Privacy policy</span></div>
</div>
</body>
</html>