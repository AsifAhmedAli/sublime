<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$data = $_POST['data'];
$data = json_decode($data);
// $measures = $data
// $dropdowna = $_POST['dropdowna'];
// $howheat = $_POST['howheat'];
// $benefits1 = $_POST['benefits1'];
// $incomeanual = $_POST['incomeanual'];
// $fullname = $_POST['fullname'];
// $email = $_POST['email'];
// $phone = $_POST['phone'];
// echo "done;";
$measures = $data->measures;
$benefits1 = $data->benefits1;
// print_r($data->measures);
$body = "";
$dropdowna = $data->dropdowna;
$howheat = $data->howheat;
// $benefits1 = $_POST['benefits1'];
$incomeanual = $data->incomeanual;
$fullname = $data->fullname;
$email = $data->email;
$phone = $data->phone;

$body .= "How are you related to property?: ". $dropdowna."<br>";
$body .= "How do you currently heat your home?: ". $howheat."<br>";
$body .= "Is your combined household income is below $31k annually?: ". $incomeanual."<br>";
$body .= "Full Name: ". $fullname."<br>";
$body .= "Email: ". $email."<br>";
$body .= "Phone: ". $phone."<br>";
$body .= "What measures we can help you with?:<br>";
foreach ($measures as $key => $value) {
    $body .= "=> ". $value."<br>";
}
$body .= "Are you or any of your household members claiming any benefits?:<br>";
foreach ($benefits1 as $key => $value) {
    $body .= $value .": ". $value ."<br>";
}
// echo "<script>console.log('".$body."')</script>";
// //Import PHPMailer classes into the global namespace
// //These must be at the top of your script, not inside a function

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.ssublime.co.uk';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'sender@ssublime.co.uk';                     //SMTP username
    $mail->Password   = 'yS85,4$sdkVl';                               //SMTP password
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;         
    $mail->SMTPSecure = "ssl";                           //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('sender@ssublime.co.uk', 'Sublime Energy Services');
    $mail->addAddress('asifahmedjutt103@gmail.com', 'Jutt');     //Add a recipient
    // $mail->addAddress('asif@mexil.it');               //Name is optional
    $mail->addReplyTo('sender@ssublime.co.uk', 'Sublime Energy Services');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Test';
    $mail->Body    = $body;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>