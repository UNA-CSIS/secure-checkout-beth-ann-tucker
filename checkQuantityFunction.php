<?php
function checkQuantity($userInput){
    if (is_numeric($userInput) == 1) {
        return $userInput;
    } else {
        return 0;
    }
}
?>