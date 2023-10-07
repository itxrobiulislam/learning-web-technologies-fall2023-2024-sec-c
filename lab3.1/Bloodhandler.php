<!DOCTYPE html>
<html>
<head>
    <title>Handler Page</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["blood_group"])) {
        $selectedBloodGroup = $_POST["blood_group"];
        echo  $selectedBloodGroup;
    }
    ?>
</body>
</html>
