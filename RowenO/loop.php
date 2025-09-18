<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="checkbox" name="subjects[]" value="Math"> Math<br>
    <input type="checkbox" name="subjects[]" value="Science"> Science<br>
    <input type="checkbox" name="subjects[]" value="English"> English<br>
    <input type="checkbox" name="subjects[]" value="Pathfit"> Pathfit<br>
    <input type="checkbox" name="subjects[]" value="Rizal"> Rizal<br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {
    if (!empty($_POST['subjects'])) {
        echo "<h3>You selected:</h3>";
        foreach ($_POST['subjects'] as $subject) {
            echo($subject) . "<br>";
        }
    } else {
        echo "<p>No Subject Selected!</p>";
    }
}
?>
</body>
</html>