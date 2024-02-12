<?php
ini_set('display_errors', 1); // Display errors on the screen
// ini_set('log_errors', 1); // Log errors to a file
error_reporting(E_ALL); // Show all errors
error_reporting(E_ERROR | E_WARNING | E_PARSE); // Show only errors, warnings, and parse errors
error_reporting(E_ALL & ~E_NOTICE); // Show all errors, except for notices
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
// $mail = new PHPMailer(true);

var_dump($_POST);

if (array_key_exists('email', $_POST)) {
    $err = false;
    $msg = '';
    $email = '';
    //Apply some basic validation and filtering to the subject
    if (array_key_exists('select', $_POST)) {
        $subject = substr(strip_tags($_POST['select']), 0, 255);
    } else {
        $subject = 'No subject given';
    }
    //Apply some basic validation and filtering to the query
    if (array_key_exists('message', $_POST)) {
        //Limit length and strip HTML tags
        $query = substr(strip_tags($_POST['message']), 0, 16384);
    } else {
        $query = '';
        $msg = 'No query provided!';
        $err = true;
    }
    //Apply some basic validation and filtering to the name
    if (array_key_exists('name', $_POST)) {
        //Limit length and strip HTML tags
        $name = substr(strip_tags($_POST['name']), 0, 255);
    } else {
        $msg .= '<div class="alert alert-danger" role="alert">
        Error: invalid name provided
      </div>';
        $err = true;
    }

    if (array_key_exists('surname', $_POST)) {
        //Limit length and strip HTML tags
        $surname = substr(strip_tags($_POST['surname']), 0, 255);
    } else {
        $msg .= '<div class="alert alert-danger" role="alert">
        Error: invalid surname provided
      </div>';
        $err = true;    
    }

    if (array_key_exists('phone', $_POST)) {
        //Limit length and strip HTML tags
        $phone = substr(strip_tags($_POST['phone']), 0, 255);
    } else {
        $msg .= '<div class="alert alert-danger" role="alert">
        Error: invalid phone provided
      </div>';
        $err = true;
    }

    //Validate to address
    //Never allow arbitrary input for the 'to' address as it will turn your form into a spam gateway!
    //Substitute appropriate addresses from your own domain, or simply use a single, fixed address
    if (array_key_exists('select', $_POST) && in_array($_POST['select'], ['1', '2', '3'], true)) {
        $to = $_POST['select'] . '@example.com';
    } else {
        $to = 'support@example.com';
    }
    //Make sure the address they provided is valid before trying to use it
    if (array_key_exists('email', $_POST) && PHPMailer::validateAddress($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $msg .= '<div class="alert alert-danger" role="alert">
        Error: invalid email address provided
      </div>';
        $err = true;
    }
    if (!$err) {
        $mail = new PHPMailer();
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'aleksale.lv';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'test@aleksale.lv';                     //SMTP username
        $mail->Password   = 'supertest!!';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;         
        //It's important not to use the submitter's address as the from address as it's forgery, This is a success alert—check it out! 
        //which will cause your messages to fail SPF checks.
        //Use an address in your own domain as the from address, put the submitter's address in a reply-to
        $mail->setFrom('test@aleksale.lv', (empty($name) ? 'Contact form' : $name));
        $mail->addAddress('nils@aleksale.lv');
        $mail->addReplyTo($email, $name);
        $mail->Subject = 'Contact form: ' . $subject;
        $mail->Body = "Contact form submission\n\n" . $query . "\n\n" . $name . ", " . $surname . ", " . $email . ", " . $phone;
        if (!$mail->send()) {
            $msg .= 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            $msg .= '<div class="alert alert-success" role="alert">
            Message sent!
          </div>';
        }
    }
} 

?>

<div class="content row">
    <h1>Contact Us</h1>
    <?php echo $msg; ?>
    <form  method="post">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3 mb-2">
                    <input type="text" id="name" name="name" class="form-control" placeholder="Vārds">
                </div>
                <div class="col-md-3 mb-2">
                    <input type="text" id="surname" name="surname" class="form-control" placeholder="Uzvārds">
                </div>
                <div class="col-md-3 mb-2">
                    <input type="text" id="email" name="email" class="form-control" placeholder="Epasts">
                </div>
                <div class="col-md-3 mb-2">
                    <input type="text" id="phone" name="phone" class="form-control" placeholder="Telefons">
                </div>
            </div>
        </div>

            <div>
                <div class="mb-2">
                    <label class="visually-hidden" for="subjectSelect">Preference</label>
                    <select class="form-select" id="subjectSelect" name="select">
                        <option selected>Izvēlieties tematu...</option>
                        <option value="1">Temats 1</option>
                        <option value="2">Temats 2</option>
                        <option value="3">Temats 3</option>
                    </select>
                </div>

                <div class="form-floating mb-2">
                    <textarea class="form-control" placeholder="Ievietojiet komentāru" id="message" name="message" style="height: 100px"></textarea>
                    <label for="message">Message</label>
                </div>

                <div class="col-md-12 text-center mb-2">
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </div>
        </div>    
    </form>
    
</div>