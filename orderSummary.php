<?php
session_start();

require __DIR__ . '/checkQuantityFunction.php';   

//save the form data into the session (fn & ln)
$_SESSION['frames'] = checkQuantity($_POST['diploma_frame']);
$_SESSION['caps'] = checkQuantity($_POST['cap']);
$_SESSION['gowns'] = checkQuantity($_POST['gown']);
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Order Summary</title>
</head>

<body>
    <p>Subtotal: </p>
    
    <?php
        $total = number_format($_SESSION['gowns'] * 35 + $_SESSION['caps'] * 15 + $_SESSION['frames'] * 25, 2);
        echo "$ $total <br>";
        ?>

<form method="post" action="taxCalculation.php">
    <p>
        <input type="submit" name="next" value="Confirm">
    </p>
</form>
</body>
</html>
