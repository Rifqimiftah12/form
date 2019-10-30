<html>
<head><title>Form Array</title></head>
<body>
    <fieldset>
    <legend>Latihan Array</legend>
    <FORM ACTION="" METHOD="GET">
    <center><h5>Anggota keluarga</h5></center>
<label for="">Masukan Jumlah Anggota Keluarga</label> 
<input type="number" min="0" name="masuk"required><input type="submit" name="input" value="Proses">
<hr>
  </FORM>
  <FORM ACTION="prosesformarray.php" METHOD="POST" NAME="input">  
<?php
if (isset($_GET['input'])) {
$masuk = $_GET['masuk'];

for ($i=0; $i <$masuk ; $i++) { 
    echo '<br>Nama <input type="text"  name="nama[]"required>
    Nik <input type="text"  name="nik[]"required>
    Alamat <input type="text"  name="alamat[]"required>
    Umur <input type="text"  name="umur[]"required><br><br>';
}
echo '<input type="submit" name="Input" value="simpan"> 
<input type="reset" name="reset" value="reset">';
}
?>
</FORM>  
    </fieldset>
</body>
</html>