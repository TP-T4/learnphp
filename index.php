<?php
$test = true;
$test = false;
$test = true && false;
$test = true || false;
$test = !true;
$test = (true && false) || false || (!false && true);
$test = false || false || true;
$test = true xor false;
$test = true and false;
$test = true or false;
var_dump($test);
?>