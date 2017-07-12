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
<link href="<?php echo base_url('assets/view.css')?>" rel="stylesheet">
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
<div id="Layer1" style="position:relative;text-align:center;width:100%;height:88px;float:left;clear:left;display:block;z-index:3;">
<div id="Layer1_Container" style="width:970px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="wb_Image1" style="position:absolute;left:26px;top:1px;width:69px;height:87px;z-index:0;">
<a href="./index.html"><img src="<?php echo base_url('assets/images/LOGO1.png')?>" id="Image1" alt=""></a></div>
<div id="wb_CssMenu1" style="position:absolute;left:135px;top:25px;width:764px;height:63px;text-align:right;z-index:1;">
<ul>
<li class="firstmain"><a href="<?php echo base_url('direct/studentdashboard')?>" target="_self">HOME</a>
</li>
<li><a href="<?php echo base_url('studentFunctions/attendance')?>" target="_self">ATTENDANCE</a>
</li>
<li><a href="<?php echo base_url('mainControl/viewEvents')?>" target="_self">EVENTS</a>
</li>
<li><a href="<?php echo base_url('direct/contact')?>" target="_self">CONTACT</a>
</li>
<li><a href="<?php echo base_url('studentFunctions/logout')?>" target="_self">LOGOUT</a>
</li>
</ul>
</div>
</div>
</div>
<!-- <?php ?> -->
 <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            
                            <div class="panel-body text-left">
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <center>
                                            <a class="" href="#">
                                                <img class="media-object dp img-circle" src="<?php echo base_url('assets/images/sicon.png')?>">
                                            </a>
                                        </center>
                                    </div>
                                    <div class="col-md-12">
                                    <?php
										foreach($profile as $row):
										?>	

                                        <h2>Student Name: <?=$row->firstname?></h2>
                                        <h2><?=$row->lastname?></h2><br>
                                        <h3>User Name :<?=$row->username?></h3>
                                        <p>Course: <?=$row->coursename?></p>
                                        <p>Contact: <?=$row->contact?></p>
                                        <p>Address: <?=$row->address?></p>
                                        <p>Email: <?=$row->email?></p>

                                        <?php
												endforeach;
										?>

                                    </div>
                                </div>
                            </div>
                              </div>
                            </div>
                            </div>
                            </div>
                            </div>
<div id="PageFooter1" style="display:inline-block;position:relative;overflow:hidden;text-align:left;width:100%;height:102px;z-index:5;">
<div id="wb_Text8" style="position:absolute;left:214px;top:12px;width:495px;height:34px;text-align:center;z-index:2;">
<span style="color:#000000;font-family:Arial;font-size:13px;"><br></span><span style="color:#808080;font-family:Arial;font-size:16px;">Copyright © 2017 Kathmandu TIMS | Privacy policy</span></div>
</div>
</div>
</body>
</html>