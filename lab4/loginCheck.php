<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (empty($username) || empty($password)) {
            echo "Please fill in all fields.";
        } else {
            header("Location: profile_picture.php");
            exit();
        }
    }
?>
