<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gender Page</title>
</head>
<body>
    <form method="POST">
        <fieldset>
            <legend>Gender</legend>
            <input type="radio" name="gender" value="Male" id="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'Male') echo 'checked'; ?> /> Male
            <input type="radio" name="gender" value="Female" id="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'Female') echo 'checked'; ?> /> Female
            <input type="radio" name="gender" value="Other" id="other" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'Other') echo 'checked'; ?> /> Other <br>
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
