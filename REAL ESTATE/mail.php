<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['emailaddress'];
$phone= $_POST['phone'];
$to = "Singh.sushant32@icloud.com";
$subject = "Mail From Vendibulls Website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Mobile Number =" . $phone;
$headers = "From: noreply@vendibulls.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:ThankYou.html");
?>