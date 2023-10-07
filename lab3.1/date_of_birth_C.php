
<html>
<head>
    <title>Task C</title>
</head>
<body>
    <form method="POST">
    <fieldset style="width: 40px;">
            <legend><b>Date of Birth</b></legend>
        
        
        <input type="date" name="date" id="date"/> <br>
        <hr>
        
        <input type="submit" name="" value="Submit" />
        <hr>
    </fieldset>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $date = $_POST["date"];
        echo  $date;
    }
    ?>
</body>
</html>
