
<html>
<head>
    <title>Task C</title>
</head>
<body>
    <form method="POST">
    <fieldset>
        <legend>EMAIL</legend>
        <input type="text" name="name" id="name" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>">
        <br>
        <hr>
        <input type="submit" name="" value="Submit" />
    </fieldset>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        echo  $name;
    }
    ?>
</body>
</html>
