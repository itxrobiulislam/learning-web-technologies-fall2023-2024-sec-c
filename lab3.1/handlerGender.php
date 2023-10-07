<!DOCTYPE html>
<html>
<head>
    <title>Handler Page</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["gender"])) {
            $gender = $_POST["gender"];
            echo "Gender: $gender";
        }
    }
    ?>
</body>
</html>
