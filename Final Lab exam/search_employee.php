<?php
$username = $_GET['username'];

if ($username === 'admin') {
    echo "Employee Found: Admin, Contact No: 123456789";
} else {
    echo "Employee not found.";
}
?>
