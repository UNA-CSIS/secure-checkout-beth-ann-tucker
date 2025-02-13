<?php
session_start();

$_SESSION['frames'] = $_SESSION['frames'];
$_SESSION['caps'] = $_SESSION['caps'];
$_SESSION['gowns'] = $_SESSION['gowns'];
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Order Summary with Tax</title>
</head>

<body>
    
    <?php
        $pretax = number_format($_SESSION['gowns'] * 35 + $_SESSION['caps'] * 15 + $_SESSION['frames'] * 25, 2);
        echo "Subtotal: $ $pretax <br>";
        $tax = number_format($pretax * 0.095, 2);
        echo "Tax: $ $tax <br>";
        $posttax = number_format($tax + $pretax, 2);
        $_SESSION['finalTotal'] = $posttax;
        echo "Final Total: $ $posttax";
        ?>

<form method="post" action="loginPage.php">
    <p>
        <input type="submit" name="next" value="Confirm">
    </p>
</form>

    <a href="http://localhost/CreditCard/index.php">Continue Shopping</a>
    
</body>
</html>
