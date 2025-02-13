<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Validation</title>
    </head>

    <body>
        <?php
        session_start();
        
        require __DIR__ . '/validationFunction.php';

        $_SESSION['cardNum'] = $_POST['card'];
        $_SESSION['finalTotal'] = $_SESSION['finalTotal'];

        validateCard($_SESSION['cardNum'], $_SESSION['finalTotal']);
        ?>
    </body>
</html>
