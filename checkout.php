<?php
session_start();

//save the form data into the session (fn & ln)
$_SESSION['finalTotal'] = $_SESSION['finalTotal'];
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Order Summary with Tax</title>
</head>

<body>
    
    <?php
    if (isset($_SESSION["authenticated"]) == 0) {
        header("Location: http://localhost/CreditCard/index.php");
    };

    $finalTotal = $_SESSION['finalTotal'];
        echo "Final Total: $ $finalTotal";
    ?>
    
    <form method="post" action="validation.php">
    <p>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
    </p>
    
    <p>
        <label for="card">Card Number:</label>
        <input type="text" name="card" id="card" required>
    </p>
    
    <p>
        <label for="date">Expiration Date (mm/yy):</label>
        <input type="text" name="date" id="date" required>
    </p>

    <p>
        <label for="cvc">CVC:</label>
        <input type="text" name="cvc" id="cvc" required>
    </p>
    <p>
        <input type="submit" name="next" value="Pay">
    </p>
</form>
</body>
</html>
