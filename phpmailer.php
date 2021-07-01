<?php
error_reporting(E_ALL); 
ini_set('display_errors', '1');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields and remove whitespace.
    $name = strip_tags(trim($_POST["name"]));
            $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    // $cont_subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);

    // Check that data was sent to the mailer.
    if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Set a 400 (bad request) response code and exit.
        http_response_code(400);
        echo "Oops! There was a problem with your submission. Please complete the form and try again.";
        exit;
    }
    // Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
require ('PHPMailer/src/PHPMailer.php');
require ('PHPMailer/src/SMTP.php');
require ('PHPMailer/src/Exception.php');


    $mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    
    // PHP Mailer  settings
    $debug = '';
    $mail->Debugoutput = function($str, $level) {
    $GLOBALS['debug'] .= "$level: $str\n";
    };

    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'in-v3.mailjet.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = '32ec8f77e0eb9ed0d4bf5bbfae3b1f44';                 // SMTP username
    $mail->Password = '1302576281c451fa926cc6a35e0d1c79';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable   
    $mail->Port = 587 ;                                    // TCP port to connect to TLS encryption, `ssl` also accepted

    //Recipients
    $mail->setFrom('kameny666@gmail.com', 'Feedback');
    $mail->addAddress('mahmoudh.buss@gmail.com', 'Mailer');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('img/ehda.jpg', 'EhdaScript.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the Feedback Of';
    $mail->Body    = '
        <head>
	     <div style="padding: 11px;background-color: #2c2e33; 
		table{
                    width: 100%;
                    overflow: hidden;
                    margin: 31px 0px;
                }
                th{    
                    overflow: hidden;
                    padding-bottom: 17px;
                    font-family: Poppins;
                    font-size: 45px;
                    font-weight: 700;
                    color:#fff;
                }
                td{
                    float: left;
                    overflow: hidden;
                    padding-bottom: 17px;
                    margin-right: 14px;
                    font-family: Poppins;
                    color:#fff;
                }">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        </head>    
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <style>

                
        </style>    
            <h3 style="
            text-align: center;
            font-size: 40px;
            color: black;
            font-family: Poppins;
            letter-spacing: 1.8px;
            text-transform: uppercase;
        ">Hello Trippy Travel We have A new message for you !</h3>
            <h4>
         <table>
          <tbody><tr>
            <th>His name is :</th> <td>'.$name.'</td>
          </tr>
          <tr>
            <th>His Email :</th> <td>'.$email.'</td>
          </tr>           
          <tr>
            <th>Message Content:</th> <td>'.$message.'</td>
          </tr> 
         </tbody></table>
        </h4>
        </div>';

  if($mail->send()){
      echo 'Message has been sent';
    }else{
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
} catch (Exception $e) {
} }