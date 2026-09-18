<?php

class box {
    public $width;
    public $height;
    public $depth;
    public $isopen = false;
    public $hasbeenopened = false;

    public function __construct($width, $height, $depth) {
        $this->width = $width;
        $this->height = $height;
        $this->depth = $depth;
    }

    public function volume() {
        return $this->width * $this->height * $this->depth;
    }

    public function open() {
        if (!$this->isopen) {
            $this->isopen = true;
            $this->hasbeenopened = true;
        }
    }
}

box1 = new box();
box1->width = 10;
box1->height = 5;
box1->depth = 2;
box1->open();

box2 = new box();
box2->width = 3;
box2->height = 4;
box2->depth = 6;
box2->$isopen = false;

$num1 = 1;
$num2 = $num1;
$num1 = 2;

$box1 = new box();
$box1->width = 1;
$box2 = clone $box1;
$box1->width = 2;
var_dump($box1, $box2); // Outputs: 2

$numbers = [1, 2, 3, 4, 5];

for($i=0; $i < count($numbers); $i++) {
   $n = $numbers[$i];
   $n+=1;
}

foreach($numbers as $n) {
   $n+=1;
}
