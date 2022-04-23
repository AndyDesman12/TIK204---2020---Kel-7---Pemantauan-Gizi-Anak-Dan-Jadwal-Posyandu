<?php

$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli("localhost", "root", "", "logindb");
if ($conn->connect_error) {
    die("Failed Connection : " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("SELECT * FROM login_register WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if ($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        if ($data['password'] === $password) {
            header("Location: home.html");
        }
    } else {
        header("Location: loginGagal.html");
    }
}
