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


// Redirect to thank you page at the end
header("Location: thankyou");

?>
