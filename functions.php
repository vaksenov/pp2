<?php

function printArr($incomingArray) {
    foreach ($incomingArray as $number) {
        echo "<p>$number</p>";
    }
}

function largest($incomingArray) {
    $largestNumber = 0;
    for ($x = 0; $x < sizeof($incomingArray); $x++) {
        if ($incomingArray[$x] > $largestNumber) {
            $largestNumber = $incomingArray[$x];
        }
    }
    echo "<p>Largest Number: $largestNumber</p>";
}

?>