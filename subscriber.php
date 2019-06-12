<?php
header("Content-Type: application/json; charset=UTF-8");

// $conn = new mysqli ('localhost', 'root', '', 'techserv');
$conn = new mysqli ('localhost:3306', 'mujaware_muja', 'muja!1025?', 'mujaware_mujaware');
//$link = mysqli_connect("localhost:3306", "ebizebiz", "Pqd72H0q7h", "ebizebiz_wp292");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

//Sending Formatted Email to Admin
$email = $_POST['email'];
$to = 'admin@mujaware.com'; //change this to admin@mujaware.com
$subject = '[Mujaware] New Subscriber';
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
function clean_string($string) {
	  $bad = array("content-type","bcc:","to:","cc:");
	  return str_replace($bad,"",$string);
    }
    
//Create email headers
$headers .= "From: ".clean_string($email)." \r\n".
    "Reply-To: ".clean_string($email)."\r\n" .
    'X-Mailer: PHP/' . phpversion();

//Compose a simple HTML email message

$message = '<html><body>';

$message .= '<h1 style="color:#f40;">Hi, Here\'s is a new subscriber for you.<br></h1>';

$message .= '<p style="color:#080;font-size:18px;">Get the email below and add it to the email database. Thank you. </p>';
	
$message.=  '<p style="color:#080;font-size:18px;">The subscriber email is: '.clean_string($email).'</P>';

$message .= '</body></html>';

// Sending email
@mail($to, $subject, $message, $headers); 
// close connection
mysqli_close($link);
?>
