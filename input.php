<h2>Aplikasi input data pemantauan Covid-19</h2>  
 <hr>  
 <body>
 <form action="output.php" method="post">  
<table border="1" align="center">
<tr>
    <td>Nama File</td>
    <td>:</td>
    <td><input type="text" name="nama" required></></td><br>
</tr>
</table>

<table border="1" align="center">
<tr>
     <td>Nama Wilayah</td>
    <td>:</td>
    <td><select name="warna">
       <option value="biru">DKI Jakarta</option>
         <option value="kuning">Jawa Barat</option>
         <option value="abu">Banten</option>
         <option value="ungu">Jawa Tengah</option>
        
     </select></td>
</tr>  

    <td>Jumlah Positif</td>
    <td>:</td>
    <td><input type="number" name="jumlahpositif"/></td>
</tr>
<tr>
    <td>Jumlah Dirawat</td>
    <td>:</td>
    <td><input type="number" name="jumlahdirawat" /></td>
</tr>
<tr>
    <td>Jumlah Sembuh</td>
    <td>:</td>
    <td><input type="number" name="jumlahsembuh" /></td>
</tr>
<tr>
    <td>Jumlah Meninggal</td>
    <td>:</td>
    <td><input type="number" name="jumlahmeningal" /></td>
</tr>
<tr>
    <td>Nama Operator</td>
    <td>:</td>
    <td><input type="text" name="namaoperator" /></td>
</tr>
<tr>
    <td>Nim Mahasiswa</td>
    <td>:</td>
    <td><input type="number" name="nimmahasiswa" /></td>
</tr>
<tr>
     <td colspan="3" align="center"><input type="submit" name="kirim"   value="Kirim" /><input type="reset" name="batal" value="batal" /></td>
</tr>
</table>
</form>
</body>


