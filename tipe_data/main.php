<!DOCTYPE html>
<html>
<body>
<style>
    body{
        background-image: url("pastel.jpg");
        background-color:pink;
    }
    tr{
        background-color:pink;
    }
   </style>
<center>
    <table border="2" style="text-align: center; vertical-align: center;">
            <tr>                
                <td>Foto Siswa</td>
                <td>Nama</td>
                <td>NIT</td>
                <td>Kelas</td>
                <td>Jurusan</td>
            </tr>
            <tr>
                <td align="center">
                    <img src="aku.jpg" width='100' height='90' style="float: left;"/>
                </td>
                <td>Saniah</td>
                <td>2223614</td>
                <td>XI</td>
                <td>RPL</td>
            </tr>
            <?php
                
            ?>
    </table>
</center>
<center>
<h5>Getting the Data Type>>var_dump() function.</h5>
<?php
$x = 5;      //nilai variabel|saniah XI-rpl
var_dump($x); //untuk memberikan nilai suatu variabel>>hasil int(5)
?>
<h5>string</h5>
<?php // String adalah tipe data untuk teks yang terdiri dari gabungan huruf, angka, dan berbagai karakter
$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "<br>"; 
var_dump($y);
?>

</center>
</body>
</html>
