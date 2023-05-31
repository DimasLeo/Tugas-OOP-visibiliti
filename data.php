<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <form action="#" method="post">
        <input type="text" name="txNama" id="" required placeholder="Masukan Nama">
        <input type="number" name="txUmur" id="" require placeholder="Masukan Umur">
        <input type="text" name="txAlamat" id="" require placeholder="Masukan Alamat">
        <input type="submit" value="Simpan" name="btnSimpan">
</form>
<?php
class Biodata {
        public $nama;
        public $umur;
        public $alamat;


        public function setNama($nama) {
            $this->nama = $nama;
            if ($this->nama != "") {
                return $nama;
            } else
            echo "Data Masih Kosong!";
        }
        public function setUmur($umur) {
            $this->umur = $umur;
            if ($this->umur != "") {
                return $umur;
            } else
            echo "Data Masih Kosong!";
        }
        public function setAlamat($alamat) {
            $this->alamat = $alamat;
            if ($this->alamat != "") {
                return $alamat;
            } else
            echo "Data Masih Kosong!";
        }
    }

    $biodata = new Biodata();
    if(isset($_POST['btnSimpan'])) {
        echo "Nama : " . $biodata->setNama($_POST['txNama']);
        echo "<br>";
        echo "Umur : " . $biodata->setUmur($_POST['txUmur']);
        echo "<br>";
        echo "Alamat : " . $biodata->setAlamat($_POST['txAlamat']);
    }
    ?>
</center>*
</body>
</html>