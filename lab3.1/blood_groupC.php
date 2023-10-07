<!DOCTYPE html>
<html>
<head>
    <title>HTML FORM</title>
</head>
<body>
    <form method="POST">
        Blood Group
        <select name="blood_group">
            <option value="A+" <?php if(isset($_POST['blood_group']) && $_POST['blood_group'] == 'A+') echo 'selected'; ?>>A+</option>
            <option value="B+" <?php if(isset($_POST['blood_group']) && $_POST['blood_group'] == 'B+') echo 'selected'; ?>>B+</option>
            <option value="A-" <?php if(isset($_POST['blood_group']) && $_POST['blood_group'] == 'A-') echo 'selected'; ?>>A-</option>
            <option value="B-" <?php if(isset($_POST['blood_group']) && $_POST['blood_group'] == 'B-') echo 'selected'; ?>>B-</option>
            <option value="AB+" <?php if(isset($_POST['blood_group']) && $_POST['blood_group'] == 'AB+') echo 'selected'; ?>>AB+</option>
            <option value="O+" <?php if(isset($_POST['blood_group']) && $_POST['blood_group'] == 'O+') echo 'selected'; ?>>O+</option>
            <option value="O-" <?php if(isset($_POST['blood_group']) && $_POST['blood_group'] == 'O-') echo 'selected'; ?>>O-</option>
        </select>
        <br>
        <hr>
        <input type="submit" name="submit" value="Submit" />
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["blood_group"])) {
        $selectedBloodGroup = $_POST["blood_group"];
        echo $selectedBloodGroup;
    }
    ?>
</body>
</html>
