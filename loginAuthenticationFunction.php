<?php
function loginAuth($username, $password){
    if ($username != "" && $password != "") {
        if ($username == $password) {
            header("Location: http://localhost/CreditCard/checkout.php");
            $_SESSION["authenticated"] = "true";
        } else {
            header("Location: http://localhost/CreditCard/loginPage.php");
            $_SESSION["error"] = 'Username and/or password is incorrect. Please try again.';
        }
    } else {
        header("Location: http://localhost/CreditCard/loginPage.php");
         $_SESSION["error"] = 'Please enter a value for both username & password.';
    }
}
?>
