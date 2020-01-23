<?php
header("Content-Type: application/json; charset=UTF-8");

$fname =$_POST["fname"]; //"Ali";
$lname =$_POST["lname"]; //"Bello";
$email =$_POST["email"]; //"alybaba2009@gmail.com";
$phone =$_POST["phone"]; //"08065899144";
$address =$_POST["address"];// "Sinatech";
$howdidyouhear =$_POST["howdidyouhear"]; //"I need a website";
$course = $_POST["course"];
$session =$_POST["session"];// "Sinatech";
$localgovt =$_POST["localgovt"]; //"I need a website";
$state = $_POST["state"];

// $conn = new mysqli ('localhost', 'root', '', 'techserv');
$conn = new mysqli ();
//check connection
if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
}

$sql = "INSERT INTO UserRegistration(
    firstName, 
    lastName, 
    email, 
    phone, 
    address, 
    howDidYouHear, 
    course, 
    session,
    localGovt,
    state) VALUES(
        '$fname', 
        '$lname', 
        '$email', 
        '$phone', 
        '$address', 
        '$howdidyouhear', 
        '$course',
        '$session',
        '$localgovt',
        '$state'
        )";

if ($conn->query($sql)) {
    echo "New record created successfully";
} else {
    echo "Error: ".$sql."<br>".$conn->error;
}

//Sending Formatted Email to Admin
//$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$to = 'admin@mujaware.com';
$subject = '[Mujaware] New Registeration';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
//Create email headers
$headers .= "From: ".clean_string($email)." \r\n".
    "Reply-To: ".clean_string($email)."\r\n" .
    'X-Mailer: PHP/' . phpversion();

//Compose a simple HTML email message to admin

$message = '<html><body>';

$message .= '<h1 style="color:#f40;">Hi, Here\'s is a new registration.<br></h1>';

$message .= '<p style="color:#080;font-size:18px;">Get the course detail ready and send it to this email below. Thank you. </p>';
	
$message.='<p style="color:#080;font-size:18px;">The registration is from: '.clean_string($email).'</p>';

$message .= '</body></html>';

// Sending email to admin
@mail($to, $subject, $message, $headers); 




//Sending Formatted Email to user
$toUser = $email;
$subjectUser = '[Mujaware] Thank You for Your Registration';

// To send HTML mail, the Content-type header must be set
$headersUser  = 'MIME-Version: 1.0' . "\r\n";
$headersUser .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

//Create email headers
$headersUser .= "From: ".clean_string("admin@mujaware.com")." \r\n".
    "Reply-To: ".clean_string("admin@mujaware.com")."\r\n" .
    'X-Mailer: PHP/' . phpversion();
//Compose a simple HTML email message to user

$messageUser = '<html><body>';

// $messageUser .= '<h1 style="color:#f40;">Hi, Here\'s is a new quote request.<br></h1>';

$messageUser .= '<p style="color:#080;font-size:18px;">Thank you for your registration. We\'ll get back to you within 24 hours</p>';
	
// $messageUser .="The quote request is from: ".clean_string($email)."\n";

$messageUser .= '</body></html>';

// Sending email to user
@mail($toUser, $subjectUser, $messageUser, $headersUser); 


//method to clean the string
function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:");
    return str_replace($bad,"",$string);
  }

  
// close connection
$conn->close();
?>