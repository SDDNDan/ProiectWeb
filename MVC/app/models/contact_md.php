<?php
/**
 * Created by PhpStorm.
 * User: Dan
 * Date: 5/29/2018
 * Time: 6:55 PM
 */
require("../PHPMailer_5.2.4/class.phpmailer.php");
class contact_md
{
    protected $conn;
    public function __construct()
    {
        $this->conn = new mysqli('localhost','root','','student') or die ("Naspa");
    }

    public function sendMail($email,$name,$subject,$message)
    {
        $mail = new PHPMailer();
        $mail->IsSMTP(); // set mailer to use SMTP
        $mail->From = "danutsddn11@gmail.com";
        $mail->FromName = "Slusariuc Dan";
        $mail->Host = "smtp.gmail.com"; // specif smtp server
        $mail->SMTPSecure= "ssl"; // Used instead of TLS when only POP mail is selected
        $mail->Port = 465; // Used instead of 587 when only POP mail is selected
        $mail->SMTPAuth = true;
        $mail->Username = "danutsddn11@gmail.com"; // SMTP username
        $mail->Password = "Bocsardi9339!"; // SMTP password
        $mail->AddAddress($email, "Slusariuc"); //replace myname and mypassword to yours
        $mail->AddReplyTo("danut_sddn11@gmail.com", "Slusariuc");
        $mail->WordWrap = 50; // set word wrap
//$mail->AddAttachment("c:\\temp\\js-bak.sql"); // add attachments
//$mail->AddAttachment("c:/temp/11-10-00.zip");

        $mail->IsHTML(true); // set email format to HTML
        $mail->Subject = $subject;
        $mail->Body = $message;

        if($mail->Send()) {echo "Send mail successfully";}
        else {echo "Send mail fail";}

    }

}
