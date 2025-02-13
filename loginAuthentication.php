<?php
        session_start();

        require __DIR__ . '/loginAuthenticationFunction.php';
        
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        

        loginAuth($_SESSION['username'], $_SESSION['password'] );
?>
