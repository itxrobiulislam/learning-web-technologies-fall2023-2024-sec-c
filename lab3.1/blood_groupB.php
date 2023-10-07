<!DOCTYPE html>
<html>
<head>
    <title>HTML FORM</title>
</head>
<body>
    <form method="POST">
        Blood Group
        <select name="blood_group">
            <option value="A+">A+</option>
            <option value="B+">B+</option>
            <option value="A-">A-</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select>
        <br>
        <hr>
        <input type="submit" name="submit" value="Submit" />
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["blood_group"])) {
        $selectedBloodGroup = $_POST["blood_group"];
        echo  $selectedBloodGroup;
    }
    ?>
</body>
</html>
