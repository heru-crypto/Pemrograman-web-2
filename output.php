<html>
<head>
<title>Output</title>
</head>



<?php
$nama       = trim($_POST[nama]);  
$namafile = "$nama.txt";  
$namaw  = trim($_POST[namawilayah]);
$jumlp  = trim($_POST[jumlahpasien]);
$jumld = trim($_POST[jumlahdirawat]);
$jumls   = trim($_POST[jumlahsembuh]);
$jumlm   = trim($_POST[jumlahmeninggal]);
$namao   = trim($_POST[namaoperator]);
$nim   = trim($_POST[nimmahasiswa]);
$file = fopen($namafile,"w");  
 fwrite($file,$namaw,$jumlp,$jumld,$jumls,$jumlm,$jumlm,$namao,$nim);  
 fclose($file); 
  echo "<h2>Hasil Penyimpanan Data</h2>";  
 echo "<hr>";  
 echo "Hasil : <a href='$namafile'> $namafile </a>";  
?> 


<table border="1" align="center">

<tr>
     <td width="117">Nama Wilayah</td>
     <td width="14">:</td>
     <td width="218"><? echo " $namaw"   ?></td>
</tr>
<tr>
     <td>Jumlah Positif</td>
     <td>:</td>
     <td><? echo " $jumlp"  ?></td>
</tr>
<tr>
     <td>Jumlah Dirawat</td>
     <td>:</td>
     <td><? echo " $jumld"   ?></td>
</tr>
<tr>
     <td>Jumlah Sembuh</td>
     <td>:</td>
     <td><? echo " $jumls"   ?></td>
</tr>
<tr>
    <td>Jumlah Meninggal</td>
    <td>:</td>
    <td><? echo " $jumlm"   ?></td>
</tr>
<tr>
    <td>Nama Operator</td>
    <td>:</td>
    <td><? echo " $jnamao"   ?></td>
</tr>
<tr>
    <td>Nim Mahasiswa</td>
    <td>:</td>
    <td><? echo " $nim"   ?></td>
</tr>
<tr>
     <td align="center" colspan="3"><a href="input.php">BACK </a></td>
</tr>
</table>
</body>
</html>
