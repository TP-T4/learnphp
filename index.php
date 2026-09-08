<?php
    $test = 'yolo';
    $test = 'yolo' . 'life';
    $test = $test . 'thug';
    $test = $test .= 'life';
    $name = 'tauri';
    $age = 18;
    $test = $name . ' is ' . $age . ' years old';
    $test = <<<END
    $name is $age years old.
    a
     b
      c
END;
var_dump($test);
?>