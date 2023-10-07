<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gender Page</title>
</head>
<body>
    <form method="POST">
        <fieldset>
            <legend>Gender</legend>
            <input type="radio" name="gender" value="Male" id="male" /> Male
            <input type="radio" name="gender" value="Female" id="female" /> Female
            <input type="radio" name="gender" value="Other" id="other" /> Other <br>
        </fieldset>
        <input type="submit" name="submit" value="Submit" />
    </form>
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
