<?php
// Vlad Aksenov
// April 15, 2021
// http://vaksenov.greenriverdev.com/328/pp2/index.php
// PP2 - Arrays
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Array Practice</title>
</head>
<body>
<h1>PHP Array Practice</h1>
</body>
</html>



<?php
    // turn on error reporting
    ini_set("display_errors", 1);
    error_reporting(E_ALL);

    echo "<h1>PHP Array Practice</h1>";

    $numbers = array(7, 9, 8, 9, 8, 8, 6);

    echo "<h2>Print Array Function</h2>";
    function printArr($incomingArray) {
        foreach ($incomingArray as $number) {
            echo "<p>$number</p>";
        }
    }

    printArr($numbers);
?>


