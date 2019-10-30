<!DOCTYPE html>
<html>
<head><title>HARD</title></head>
<body>
   <fieldset>
    <form ACTION="gajipro.php" METHOD="POST" NAME ="input">
        <center><h1>Penggajihan</h1></center>
        <table>
            <tr>
                <td>Nama</td> <td><input type="text" name="nama" required><br></td>
            </tr>
            <tr>
                <td>Nip</td> <td><input type="number" name="nip" required><br></td>
            </tr>
            <tr>
                <td>Alamat</td> <td><textarea name="alamat" cols"40" roes="5" required></textarea><br></td>
            </tr>
            <tr>
                <td>Jumlah Hari Kerja</td> <td><input type="text" name="jhk" min="1" max="30" required><br></td>
            </tr>
            <tr>
                <td><input type="submit" name="input" value="Masukan Data"></td>
            </tr>
        </table>
    </form>
   </fieldset> 
</body>
</html>