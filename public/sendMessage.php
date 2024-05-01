<?php
// Connection to database
require '../dbconnection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$date = date('Y-m-d');

$stmt = $pdo->prepare('INSERT INTO messages (name, email, message, date)
VALUES (:name, :email, :message, :date)');

$criteria = [
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'message' => $_POST['message'],
    'date' => $date
];

unset($_POST['submit']);
$stmt -> execute($criteria);


// require_once('PHPMailer/PHPMailerAutoload.php');

// $mail = new PHPMailer();
// $mail->isSMTP();
// $mail->SMTPAuth = true;
// $mail->SMTPSecure = 'ssl';
// $mail->Host = 'abbyandliam.co.uk';
// $mail->Port = '465';
// $mail->isHTML();
// $mail->Username = "rsvp@abbyandliam.co.uk";
// $mail->Password = "iwichswh123ABC";
// $mail->SetFrom('rsvp@abbyandliam.co.uk');
// $mail->Subject = "Abby and Liam | RSVP Confirmation";
// $mail->Body = "Hello! Thank you for sending your RSVP. More details, such as your meal options, will be emailed to you nearer the time. Thank you!";
// $mail->AddAddress($email);

// $mail->Send();

// Redirect to thank you page at the end
header("Location: thankyou");

?>