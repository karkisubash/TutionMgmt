<?php
function ValidateEmail($email)
{
   $pattern = '/^([0-9a-z]([-.\w]*[0-9a-z])*@(([0-9a-z])+([-\w]*[0-9a-z])*\.)+[a-z]{2,6})$/i';
   return preg_match($pattern, $email);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['formid']) && $_POST['formid'] == 'form1')
{
   $mailto = 'subashkarki.r15@gmail,com';
   $mailfrom = isset($_POST['email']) ? $_POST['email'] : $mailto;
   $subject = 'Contact form';
   $message = 'Values submitted from web site form:';
   $success_url = './index.html';
   $error_url = './contact.html';
   $error = '';
   $eol = "\n";
   $boundary = md5(uniqid(time()));

   $header  = 'From: '.$mailfrom.$eol;
   $header .= 'Reply-To: '.$mailfrom.$eol;
   $header .= 'MIME-Version: 1.0'.$eol;
   $header .= 'Content-Type: multipart/mixed; boundary="'.$boundary.'"'.$eol;
   $header .= 'X-Mailer: PHP v'.phpversion().$eol;
   if (!ValidateEmail($mailfrom))
   {
      $error .= "The specified email address is invalid!\n<br>";
   }

   if (!empty($error))
   {
      $errorcode = file_get_contents($error_url);
      $replace = "##error##";
      $errorcode = str_replace($replace, $error, $errorcode);
      echo $errorcode;
      exit;
   }

   $internalfields = array ("submit", "reset", "send", "filesize", "formid", "captcha_code", "recaptcha_challenge_field", "recaptcha_response_field", "g-recaptcha-response");
   $message .= $eol;
   $message .= "IP Address : ";
   $message .= $_SERVER['REMOTE_ADDR'];
   $message .= $eol;
   $logdata = '';
   foreach ($_POST as $key => $value)
   {
      if (!in_array(strtolower($key), $internalfields))
      {
         if (!is_array($value))
         {
            $message .= ucwords(str_replace("_", " ", $key)) . " : " . $value . $eol;
         }
         else
         {
            $message .= ucwords(str_replace("_", " ", $key)) . " : " . implode(",", $value) . $eol;
         }
      }
   }
   $body  = 'This is a multi-part message in MIME format.'.$eol.$eol;
   $body .= '--'.$boundary.$eol;
   $body .= 'Content-Type: text/plain; charset=ISO-8859-1'.$eol;
   $body .= 'Content-Transfer-Encoding: 8bit'.$eol;
   $body .= $eol.stripslashes($message).$eol;
   if (!empty($_FILES))
   {
       foreach ($_FILES as $key => $value)
       {
          if ($_FILES[$key]['error'] == 0)
          {
             $body .= '--'.$boundary.$eol;
             $body .= 'Content-Type: '.$_FILES[$key]['type'].'; name='.$_FILES[$key]['name'].$eol;
             $body .= 'Content-Transfer-Encoding: base64'.$eol;
             $body .= 'Content-Disposition: attachment; filename='.$_FILES[$key]['name'].$eol;
             $body .= $eol.chunk_split(base64_encode(file_get_contents($_FILES[$key]['tmp_name']))).$eol;
          }
      }
   }
   $body .= '--'.$boundary.'--'.$eol;
   if ($mailto != '')
   {
      mail($mailto, $subject, $body, $header);
   }
   header('Location: '.$success_url);
   exit;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php echo base_url();?>assets/TIMS.css" media="screen" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/contact.css" media="screen" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="Layer1" style="position:relative;text-align:center;width:100%;height:88px;float:left;clear:left;display:block;z-index:13;">
<div id="Layer1_Container" style="width:970px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="wb_Image1" style="position:absolute;left:26px;top:1px;width:69px;height:87px;z-index:0;">
<a href="./index.html"><img src="images/LOGO1.png" id="Image1" alt=""></a></div>
<div id="wb_CssMenu1" style="position:absolute;left:135px;top:25px;width:764px;height:63px;text-align:right;z-index:1;">
<ul>
<li class="firstmain"><a href="<?php echo site_url('direct/index')?>" target="_self">HOME</a>
</li>
<li><a href="<?php echo site_url('direct/adminlogin')?>" target="_self">ADMIN</a>
</li>
<li><a href="<?php echo base_url('mainControl/viewEvent')?>" target="_self">EVENTS</a>
</li>
<li><a href="<?php echo site_url('direct/login')?>" target="_self">LOGIN</a>
</li>
<li><a href="<?php echo site_url('direct/register')?>" target="_self">SIGNUP</a>
</li>
<li><a href="<?php echo site_url('direct/contact')?>" target="_self">CONTACT</a>
</li>
</ul>
</div>
</div>
</div>

<div id="wb_LayoutGrid1">
<div id="LayoutGrid1">
<div class="row">
<div class="col-1">
<div id="wb_Text1">
<span style="color:#A52A2A;font-family:Arial;font-size:43px;"><strong>Send Feedback</strong></span>
</div>
</div>
</div>
</div>
</div>
<div id="wb_Form1" style="position:absolute;left:178px;top:166px;width:615px;height:611px;z-index:15;">
<form name="Form1" method="post" action="<?php echo basename(__FILE__); ?>" enctype="multipart/form-data" id="Form1">
<input type="hidden" name="formid" value="form1">
<label for="" id="Label1" style="position:absolute;left:3px;top:4px;width:600px;height:29px;line-height:29px;z-index:3;">Fullname</label>
<input type="text" id="Editbox1" style="position:absolute;left:3px;top:49px;width:602px;height:23px;line-height:23px;z-index:4;" name="fullname" value="" spellcheck="false" placeholder="Enter your Fullname">
<input type="text" id="Editbox2" style="position:absolute;left:2px;top:128px;width:601px;height:36px;line-height:36px;z-index:5;" name="address" value="" spellcheck="false" placeholder="Enter Your Address">
<label for="" id="Label2" style="position:absolute;left:4px;top:82px;width:602px;height:38px;line-height:38px;z-index:6;">Address</label>
<label for="" id="Label3" style="position:absolute;left:1px;top:174px;width:604px;height:41px;line-height:41px;z-index:7;">Email</label>
<input type="text" id="Editbox3" style="position:absolute;left:3px;top:223px;width:599px;height:35px;line-height:35px;z-index:8;" name="email" value="" spellcheck="false" placeholder="Enter your Email">
<label for="" id="Label4" style="position:absolute;left:2px;top:268px;width:603px;height:42px;line-height:42px;z-index:9;">Message</label>
<textarea name="message" id="TextArea1" style="position:absolute;left:2px;top:318px;width:601px;height:191px;z-index:10;" rows="11" cols="97" spellcheck="false" placeholder="Enter your messages"></textarea>
<input type="submit" id="Button1" name="send" value="SEND" style="position:absolute;left:259px;top:558px;width:96px;height:25px;z-index:11;">
</form>
</div>
<div id="PageFooter1" style="position:absolute;overflow:hidden;text-align:left;left:0px;top:841px;width:100%;height:102px;z-index:16;">
<div id="wb_Text8" style="position:absolute;left:214px;top:12px;width:495px;height:34px;text-align:center;z-index:12;">
<span style="color:#000000;font-family:Arial;font-size:13px;"><br></span><span style="color:#808080;font-family:Arial;font-size:16px;">Copyright © 2017 Kathmandu TIMS | Privacy policy</span></div>
</div>
</body>
</html>