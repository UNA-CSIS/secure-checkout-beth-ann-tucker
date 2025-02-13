<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>GradGear</title>
    </head>
    <body>
        <form method="post" action="orderSummary.php">
    <p>
        <label for="gown">Graduation Gown ($35.00):</label>
        <input type="text" name="gown" id="gown" required>
    </p>
     <p>
        <label for="cap">Cap ($15.00):</label>
        <input type="text" name="cap" id="cap" required>
    </p>
    <p>
        <label for="diploma_frame">Diploma Frame ($25.00):</label>
        <input type="text" name="diploma_frame" id="diploma_frame" required>
    </p>
    <p>
        <input type="submit" name="next" value="submit">
    </p>
    </body>
</html>