<!DOCTYPE html>
<html>
<head>
    <title>Handler Page</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["name"])) {
            $name = $_POST["name"];
            echo "Name: $name";
        }
        
    }
    ?>
</body>
</html>
