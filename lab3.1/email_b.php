
<html>
<head>
    <title>Task B</title>
</head>
<body>
    <form method="POST">
    <fieldset>
        <legend>EMAIL</legend>
        <input type="text" name="name" id="name">
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
