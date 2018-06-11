<?php
/**
 * Created by PhpStorm.
 * User: stfcr
 * Date: 6/10/2018
 * Time: 8:13 PM
 */
require("../PHPMailer_5.2.4/class.phpmailer.php");
class forgot_md{
    protected $conn;
    public function __construct()
    {

        $dbHost = "localhost";
        $dbUser = "root";
        $dbPass = "";
        $dbName = "student";
        $this->conn = $this->connInit($dbHost, $dbUser, $dbPass, $dbName);
        //$this->conn = new mysqli('localhost','root','','student') or die ("Naspa");
    }

    public function connInit($dbHost, $dbUser, $dbPass, $dbName)
    {
        try {

            $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
            $pdo->exec("set names utf8");
            $pdo->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );
            return $pdo;
        } catch (PDOException $e) {
            echo "Conectarea la baza de date a esuat." . $e->getMessage();
        }
    }

    public function getPassword($email)
    {
        $query = "SELECT PASSWORD FROM STUDENTI where EMAIL = ?";
        $statement = $this->conn->prepare($query);
        $statement->execute([$email]);
        while ($row = $statement->fetch()) {
            $thePassword = $row[0];
            return $thePassword;
        }
    }

    public function sendMail($email,$password)
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

        $mail->Subject = "Recuperare Parola";
        $mail->Body = "Parola dumneavoastra este : ".$password;
    }




}