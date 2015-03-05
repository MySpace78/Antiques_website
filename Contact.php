<?php
if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$name = $_POST['name'];
	$message = $_POST['text'];
	
	mail('join_006@hotmail.com',$name, $email);
	header( "Location: http://localhost/php/simple-mail.php" );
	
	}
	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="Antiques_css/Antiq_CSS.css" media="all" rel="stylesheet" type="text/css" />

<title>Antiques</title>
</head>

<body>
<div id="wraper">
<h2 align="center">Pukhwanay Gandahara Arts</p>
<div id="div_Header">

</div>
<div id="div_Header_line">
</div>
</div>
<div id="Menu_Bar">
<ul>
<li>
<a href="Stone.php">Stone</a>
<a href="Stucco.php">Stucco</a>
<a href="Terracotta.php">Terracota</a>
<a href="Bronze.php">Bronze</a>
<a href="Gold.php">Gold</a>
<a href="Contact.php">Contacts</a>
</li>
</ul>
</div>
<div id="ContentArea">
<div id="contact">
<h3 align="center" style="font-family:'Courier New', Courier, monospace; font-size:24px; padding-top:6px; background-color:#E2E4C5; width:900px; height:30px;">Contact Us</h3>
<div id="SideBar">
<h5 style="padding-top:18px;">Customer Service</h5>
<p >(+92)0333-9113543</p>
<h5 style="padding-top:18px;">Email </h5>
<p> a1karim@yahoo.com</p>
<h5 style="padding-top:18px;">Skype </h5>
<p>akhan333<br />dr,fazal313</p>
<h5 style="padding-top:18px;">Adress</h5>
<p>Peshawer Pakistan</p>
</div>
<form name="mail" method="post" action="Contact.php">
<h5 style="margin-top:10px;">Name:</h5>
<input type="text" name="name" style="width:300px; height:30px; background-color:#F2F2EA;border:#949494 1px solid; padding-left:10px;font-family:'Times New Roman', Times, serif; font-size:18px;" /><br />
<h5 style="margin-top:10px;">Email:</h5>
<input type="text" name="email" style="width:300px; height:30px; background-color:#F2F2EA;border:#949494 1px solid; padding-left:10px;font-family:'Times New Roman', Times, serif; font-size:18px;"/><br />
<h5 style="margin-top:10px;">Message:</h5>
<textarea   name="text" style="width:600px; height:300px; background-color:#F2F2EA; border:#949494 1px solid; overflow:hidden; padding:10px;font-family:'Times New Roman', Times, serif; font-size:18px;"></textarea><br />

<input   style="width:70px; height:40px;background-color:#CCC;border:#FFF 1px solid; border-radius:6px;" type="submit" value="Send" />
</form>
</div>

</div>

<div id="FooterWrap">
<div id="FooterBar">
<ul>
<li>
<a href="Stone.php">Stone</a>
<a href="Stucco.php">Stucco</a>
<a href="Terracotta.php">Terracota</a>
<a href="Bronze.php">Bronze</a>
<a href="Gold.php">Gold</a>
<a href="Contact.php">Contact</a>


 </li>
</ul> 


</div>
<div id="CopyWrite">
 <p style="margin-top:15px;">Develoed By: Khalid Abbasi @2014</p>
 </div>
</div>
</body>
</html>
<script type="text/javascript" src="javascript/moving_image.js"></script>