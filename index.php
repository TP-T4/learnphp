<?php

class box {
    use hascolor;
    use hassmell;
    
    public $isopen;
    protected $hasbeenopened;

    public function __construct( public $width, public $height, public $depth) {
        
        var_dump('Object created');
    }

    public function open() {
        $this->isopen = true;
        $this->hasbeenopened = true;
    }
}

    public function tostring() {
        return "Box dimensions: {$this->width} x {$this->height} x {$this->depth}";
    }

class metalbox extends box {
    public $weightperunit;

    public function mass() {
        return $this->weightperunit * $this->width * $this->height * $this->depth;
    }
}

trait hascolor {
    public $color;
    public function setcolor($color) {
       return $this->color = $color;
    }
}

trait hassmell {
    public $smell;
    public function setsmell($smell) {
        return $this->smell = $smell;
    }
}

$metal1 = new metalbox(10, 20, 30);
$metal1->weightperunit = 2;
var_dump($metal1->mass());