<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $userType = $_POST["userType"];

    if ($userType === "student" && $username === "student" && $password === "student123") {
        echo json_encode(["success" => true, "redirect" => "dashboard_student.html"]);
    } elseif ($userType === "admin" && $username === "admin" && $password === "admin123") {
        echo json_encode(["success" => true, "redirect" => "dashboard_admin.html"]);
    } else {
        echo json_encode(["success" => false, "message" => "Invalid credentials"]);
    }
}
?>
