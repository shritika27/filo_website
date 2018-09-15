<?php 

if(isset($_POST['submit'])){

	if(!empty($_POST['email']) && !empty($_POST['name']) ){

	$to = "puneet.sharma440@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $email = $_POST['email'];
	$phone = $_POST['phone'];
	$comment = $_POST['message'];
    $subject = "Form submission";
    $message = "Name = ". $name . " "  . "\n\n" . "Email=". $email . " "  . "\n\n" . "Phone =". $phone . " "  . "\n\n" . "Message =". $_POST['message'];
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    if($message){
        
        header("location:common.php?msg=Send Record!!");
    }

    //echo "Mail Sent. Thank you!!!"."\n\n".$message."\n\n"."we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
}
?>