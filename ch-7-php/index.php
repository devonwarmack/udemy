<?php
    ini_set('error_reporting', E_ALL);

    $number=1;
    $otherNumber=2;

    if ($number==$otherNumber) {
    echo "number equals otherNumber";
    }

    else {
        echo "number does not equal otherNumber";
    }
    echo "<br /> <br />";

    $thiss=3;
    $that=4;

    if ($thiss!=$that) {
        echo "this is not that";
    }

    else {
        echo "this is that";
    }

     echo "<br /> <br />";

    if ($number==$otherNumber AND $number==$that) {
        echo "number equals otherNumber AND that";
    }

    else {
        echo "number does not equal otherNumber AND that";
    }
?>