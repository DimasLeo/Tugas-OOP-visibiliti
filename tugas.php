<?php

class laptop{
    private $nama;
    private $core;
    private $harga;

    public function setlnama($nama){
        echo " Merk Laptop : ". $this->nama = $nama;
    }

    public function setlcore($core){
        echo " Core Laptop : ". $this->core = $core;

    }

    public function setlharga($harga){
        echo " Harga Laptop : ". $this->harga = $harga;
    }

}



$laptop1 = new laptop ();
$laptop1 -> setlnama(" Tuf Gaming ");
echo "<br>";
$laptop1 -> setlcore("i5");
echo "<br>";
$laptop1 -> setlharga("11.000.000")
?>