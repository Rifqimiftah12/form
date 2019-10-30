<?php
class Keluarga
{
    public function __construct($a,$b,$c,$d)
    {
        $this->nama = $a;
        $this->nik = $b;
        $this->alamat = $c;
        $this->umur = $d;
    }
     public function datakeluarga()
    {
        foreach ($this->nama as $data => $x) {
            echo"Nama : " .$this->nama[$data] .
            " Nik : " .$this->nik[$data].
            " Alamat : " .$this->alamat[$data].
            " Umur : " .$this->umur[$data]."<br>";
        } 
    }
}
if (isset($_POST['Input'])){
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];

$anggota = new Keluarga($nama,$nik,$alamat,$umur);
echo $anggota->datakeluarga() . "<br>";
}
?>