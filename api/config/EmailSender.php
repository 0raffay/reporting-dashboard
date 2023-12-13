<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../vendor/autoload.php';

class EmailSender
{
    private $mailer;

    public function __construct()
    {
        $this->mailer = new PHPMailer(true);
    }

    public function sendEmail($recipient, $subject, $body)
    {
        try {

            // Enable verbose debug output
            $this->mailer->SMTPDebug = 2;

            // Set mailer to use SMTP
            $this->mailer->isSMTP();

            // Specify the SMTP server
            $this->mailer->Host = 'smtp.gmail.com';

            // Enable SMTP authentication
            $this->mailer->SMTPAuth = true;

            // Your Gmail username
            $this->mailer->Username = 'aliraxa.666@gmail.com';

            // Your Gmail password or App-Specific Password if 2-Step Verification is enabled
            $this->mailer->Password = 'vmozndmzsvlbcyxx';

            // Enable TLS encryption; 'tls' or 'ssl'
            $this->mailer->SMTPSecure = 'tls';

            // TCP port to connect to
            $this->mailer->Port = 587;

            // Set the sender's email address and name
            $this->mailer->setFrom('aliraxa.666@gmail.com');

            // Add a recipient
            $this->mailer->addAddress($recipient);

            // Set email format to HTML
            $this->mailer->isHTML(true);

            // Set the email subject
            $this->mailer->Subject = $subject;

            // Set the email body
            $this->mailer->Body = $body;

            // Send the email
            $this->mailer->send();

            // Return true if the email was sent successfully
            return 'Sent';
        } catch (Exception $e) {
            return "Email delivery failed. Error: {$this->mailer->ErrorInfo}";
        }
    }
}
