<?php
$toEmail = "subscribe@itupworks.com";
$msg = "";
/* Handling Form Post */
if($_SERVER['REQUEST_METHOD'] == 'POST' &&  $_POST['name'] !="" &&  $_POST['email'] !="" && $_POST['mobile'] !=""){
        $body ="<br/>Name : ". $_POST['name'];
        $body .="<br/>Email : ". $_POST['email'];
		$body .="<br/>Mobile : ". $_POST['mobile'];
		//$body .="<br/>Expertise : ". $_POST['expertise'];
        //$body .="<br/>Message : ". $_POST['message'];
		$headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		
		$from="do_not_reply@itupworks.com";          //Your valid email address here
		
        if(@mail($toEmail,$subject,$body,"From:".$from)){
                $msg = "done";
        }else{
                $msg = "error";
        }
}

									if($msg == 'done'){
									echo json_encode('<h5 style="color:green;">Thank you for subscribing us. You will now receive newsletters and updates.</h5>');
									 }
										else if($msg == 'error'){
									echo json_encode('<h5 style="color:red;">Some problem while sending your queries. Please try again after some time!</h5>');
									}
?>

