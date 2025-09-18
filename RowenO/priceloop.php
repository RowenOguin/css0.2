<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="checkbox" name="Items[]" value="50"> notebook (P50.00)<br>
    <input type="checkbox" name="Items[]" value="30"> pencil (P30.00)<br>
    <input type="checkbox" name="Items[]" value="100"> bag (P100.00)<br>
    <input type="checkbox" name="Items[]" value="75"> shoes (P75.00)<br>
    <input type="checkbox" name="Items[]" value="25"> eraser (P25.00)<br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {
    if (!empty($_POST['Items'])) {
        $total = 0;
        foreach ($_POST['Items'] as $price) {
            echo($price) . "<br>";
            $total += $price;
        }
        echo "the total is: $total";
    } else {
        echo "<p>No product Selected!</p>";
    }
}
else{
    echo"<p> please select atleash one product</p>";
}
?>
</body>
</html>