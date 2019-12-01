<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <?php
    $log = "./error.log";
    $message = "Er is iets mis gegaan probeer het later opnieuw." . PHP_EOL;

    try { $uit = 5 % 0;
        echo $uit;

    } catch (DivisionByZeroError $oef){
        error_log($message, 3, $log);
    }
?>

</body>

</html>
