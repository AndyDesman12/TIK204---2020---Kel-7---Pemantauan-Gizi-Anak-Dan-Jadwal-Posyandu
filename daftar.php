<?php

$username = filter_input(INPUT_POST, 'username');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

if (!empty($username)) {
    if (!empty($password)) { 

        $server = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $database = "logindb";

        $conn = new mysqli($server, $dbusername, $dbpassword, $database);
        if (mysqli_connect_error()) {
            die('Connect Error (' . mysqli_connect_errno() . ')' . mysqli_connect_error());
        } else {
            $sql = "INSERT INTO login_register (username, email, password) values ('$username', '$email', '$password')";
            if ($conn->query($sql)) {
                header("Location: index.html");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
        }
    } else {
        echo "Password empty";
        die();
    }
} else {
    echo "Username is empty";
    die();
}
