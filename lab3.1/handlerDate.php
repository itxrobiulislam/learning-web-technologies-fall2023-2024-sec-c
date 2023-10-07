<!DOCTYPE html>
<html>
<head>
    <title>Handler Page</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (isset($_POST["date"])) {
            $date = $_POST["date"];
            echo $date;
        }
    }
    ?>
</body>
</html>
