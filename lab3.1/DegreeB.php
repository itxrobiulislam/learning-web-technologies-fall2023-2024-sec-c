<!DOCTYPE html>
<html>
<head>
    <title>Degree</title>
</head>
<body>
    <form method="POST">
        <fieldset>
            <legend>Degree</legend>
            <input type="checkbox" name="degrees[]" value="SSC" id="ssc" /> SSC
            <input type="checkbox" name="degrees[]" value="HSC" id="hsc" /> HSC
            <input type="checkbox" name="degrees[]" value="BSc" id="bsc" /> BSc
        </fieldset>
        <br>
        <input type="submit" name="submit" value="Submit" />
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["degrees"])) {
        $selectedDegrees = $_POST["degrees"];
        if (!empty($selectedDegrees)) {
            echo  implode(", ", $selectedDegrees);
        } else {
            echo "No degrees were selected.";
        }
    }
    ?>
</body>
</html>
