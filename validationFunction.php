<?php
function validateCard($cardNumber, $finalTotal){
    $lastFour = substr($cardNumber, -4);
    if ($cardNumber[0] == 5 && $cardNumber[1] >= 1 && $cardNumber[1] <= 5) {
        if (strlen($cardNumber) == 16) {
            echo "Your Mastercard ending with has $lastFour been charged $ $finalTotal";
        } else {
            echo "Invalid";
        }
    } elseif ($cardNumber[0] == 4) {
        if (strlen($cardNumber) == 13 || strlen($cardNumber) == 16) {
            echo "Your VISA ending with has $lastFour been charged $ $finalTotal";
        } else {
            echo "Invalid"; }
        } elseif ($cardNumber[0] == 3 && ($cardNumber[1] == 4 || $cardNumber[1] == 7)) {
            if (strlen($cardNumber) == 15) {
                echo "Your AMEX ending with has $lastFour been charged $ $finalTotal";
            } else {
                echo "Invalid";}
        } else {
            echo "Invalid";}
}
?>
