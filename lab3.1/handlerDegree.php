<!DOCTYPE html>
<html>
<head>
    <title>Handler Page</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["degrees"])) {
            $selectedDegrees = $_POST["degrees"];
            echo implode(", ", $selectedDegrees);
        } else {
            echo "No degrees were selected.";
        }
    }
    ?>
</body>
</html>
