<?php

class PersegiPanjang {
    //property
    public $panjang;
    public $lebar;
    public $tinggi;

    //method
    function __construct($p, $l){
        $this->panjang = $p;
        $this->lebar = $l;
    }

    function getluas(){
        return $this->panjang * $this->lebar;
    }

    function getkeliling(){
        return 2 * ($this->panjang + $this->lebar);
    }
}

// instance object
$persegi_panjang1 = new PersegiPanjang(10, 5);
echo "<br>Luas PersegiPanjang = " . $persegi_panjang1->getluas();
echo "<br>Keliling PersegiPanjang = " . $persegi_panjang1->getkeliling();