<?php
class Gaji
{
    public function __construct($a,$b,$c,$d)
    {
        $this->nama = $a;
        $this->nip = $b;
        $this->alamat = $c;
        $this->jhk = $d;
    }
    public function datadiri()
    {
        $data  = "Nama : " .$this->nama;
        $data .= "<br> Nip : " .$this->nip;
        $data .= "<br> Alamat : " .$this->alamat;
        $data .= "<br> Jumlah Hari Kerja : " .$this->jhk;
        return $data; 
    }
    public function gajikotor()
    {
        $gajiktr = $this->jhk * 75000;
        return "Gaji Kotor : " . $gajiktr;
    }
    public function gajibersih()
    {
        $gajibrsh = ($this->jhk * 75000) - (($this->jhk * 75000)) * (2.5/100);
        return "Gaji Bersih : " . $gajibrsh;
    }
}
if (isset($_POST['input'])){
$nama = $_POST['nama'];
$nip = $_POST['nip'];
$alamat = $_POST['alamat'];
$jhk = $_POST['jhk'];

$penggaji = new Gaji($nama,$nip,$alamat,$jhk);
echo $penggaji->datadiri() . "<br>";
echo $penggaji->gajikotor() . "<br>";
echo $penggaji->gajibersih() . "<br>";
}
?>