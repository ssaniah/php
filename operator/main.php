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
<h5>penjumlahan +</h5> <!--dijumlahkan dari x dan y-->
<?php
$x = 10;  
$y = 6;

echo $x + $y;
?>  
<h5>pengurangan -</h5> <!--dikurangi dari x dan y-->
<?php
$x = 10;  
$y = 6;

echo $x - $y;
?>  
<h5>perkalian *</h5> <!--dikalikan dari x dan y-->
<?php
$x = 10;  
$y = 6;

echo $x * $y;
?>  
<h5>pembagian /</h5> <!--dibagi dari x dan y-->
<?php
$x = 10;  
$y = 6;

echo $x / $y;
?>  
<h5>sisa bagi %</h5> <!--mksdnya yaitu jika 10/2=0,jadi sisa bagi adalah nilai yang lebih-->
<?php
$x = 10;  
$y = 6;

echo $x % $y;
?>  
<h5>pemangkataan **</h5> <!--10 pangkat 3=1000-->
<?php
$x = 10;  
$y = 3;

echo $x ** $y;
?>  
</center>
</body>
</html>
