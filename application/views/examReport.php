<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Exam Report</title>
<link href="<?php echo base_url('assets/TIMS.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/bill.css')?>" rel="stylesheet">
</head>
<body>
<div id="Layer1" style="position:relative;text-align:left;width:100%;height:216px;float:left;clear:left;display:block;z-index:8;">
<div id="wb_Text1" style="position:absolute;left:265px;top:15px;width:446px;height:147px;text-align:center;z-index:0;">
<span style="color:#000000;font-family:'Times New Roman';font-size:43px;"><strong>TUITION INSTITUTE MANAGEMENT SYSTEM</strong></span></div>
<div id="wb_Image1" style="position:absolute;left:17px;top:18px;width:150px;height:188px;z-index:1;">
<a href="<?php echo base_url('direct/admindashboard')?>""><img src="<?php echo base_url('assets/images/LOGO1.png')?>" id="Image1" alt=""></div></a>
</div>
<table style="position:absolute;left:0px;top:216px;width:1350px;height:125px;z-index:9;" id="Table1">
<tr>
<td class="cell0"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><?php echo "Name <h1>".$_POST['cmbStudent']."</h1></br>";?>
	 </span></td>
</tr>
</table>
<table style="position:absolute;left:1px;top:341px;width:1350px;height:511px;z-index:10;" id="Table3">
<tr>
<td class="cell0"><div id="wb_Text2">
<span style="color:#000000;font-family:Arial;font-size:15px;"><strong>S.N</strong></span>
</div>
</td>
<td class="cell1"><div id="wb_Text3">
<span style="color:#000000;font-family:Arial;font-size:15px;"><strong>Course</strong></span>
</div>
</td>
<td class="cell2"><div id="wb_Text4">
<span style="color:#000000;font-family:Arial;font-size:16px;"><strong>Marks</strong></span>
</div>
</td>
</tr>
<tr>
<td class="cell3"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><br><br>1 </span></td>
<td class="cell4"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><?php echo "<br><br><h3>".$_POST['course']."</h3></br>";?> </span></td>
<td class="cell5"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> <?php echo "<br><br><h3>".$_POST['marks']."</h3></br>";?></span></td>
</tr>
</table>
<table style="position:absolute;left:0px;top:852px;width:690px;height:128px;z-index:11;" id="Table4">
<tr>
<td class="cell0"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><br><h3>Total Marks Obtained</h3></span></td>
</tr>
</table>
<table style="position:absolute;left:689px;top:850px;width:660px;height:130px;z-index:12;" id="Table5">
<tr>
<td class="cell0"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><?php echo "<br><h3>".$_POST['marks']."</h3></br>";?> </span></td>
</tr>

</table>
</body>
</html>