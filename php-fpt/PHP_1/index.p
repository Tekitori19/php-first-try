<?php

class ConNguoi {
    private string $ten;
    private string $tuoi;
    
    function __construct($tuoi)
    {
        $this->tuoi = $tuoi;
    }

    function setName(string $ten) {
        $this->ten = $ten;
    }
    
    function getName() {
        echo $this->ten;
        echo "<br>";
        echo $this->tuoi;
    }
};

$tuan = new ConNguoi(18);
$tuan->setName("Tuaan");
$tuan->getName();