<?php

class hewan {
    private $nama;
    public $jenis;
    public function tampilNama($nama){
        echo "nama hewan adalah : " .$this->nama = $nama;
    }
    public function perintah($jenis){
        echo "jenis hewan adalah : " .$this->jenis = $jenis;
    }
}
$hewan1 = new hewan ();
$hewan1 -> tampilNama("Singa"); 
echo "<br>";
$hewan1 = new hewan ();
$hewan1 -> perintah("Betina"); 

?>