<?php
include("../includes/db.php");
// print"<pre>";
// print_r($_REQUEST);
parse_str($_POST['frm_data'], $_REQUEST);
//print_r($_REQUEST);

if(isset($_REQUEST['name']) && isset($_REQUEST['email']) && isset($_REQUEST['message']) ){
	$to = "puneet.sharma440@gmail.com"; // this is your Email address
    $from = $_REQUEST['email']; // this is the sender's Email address
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
	$phone = $_REQUEST['phone'];
	$comment = $_REQUEST['message'];
    $subject = "Form submission";
    $message = "Name = ". $name . " "  . "\n\n" . "Email=". $email . " "  . "\n\n" . "Phone =". $phone . " "  . "\n\n" . "Message =". $_REQUEST['message'];
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    if($message){
        echo "Mail Send Successfully. Thank you!!! we will contact you shortly.";
    }
    //echo "Mail Sent. Thank you!!!"."\n\n".$message."\n\n"."we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.   
}
?>