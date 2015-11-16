<?php

  $myArray=array("dogs", "food", "stuff");

  print_r($myArray);

  echo "<br />";

  echo $myArray[0];

  echo "<br />";

  $otherArray=array(
    "riley" => "dog",
    "germany" => "country"
  );

  echo "<br />";

  print_r($otherArray);

  unset($otherArray["germany"]);

  echo "<br />";

  print_r($otherArray);







?>