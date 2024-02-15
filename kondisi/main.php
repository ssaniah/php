<!-- Kondisi adalah statemen yang akan diuji kebenaranya.
Jika kondisi TRUE maka statement if yang akan dijalankan, 
namun jika kondisinya FALSE maka statement else yang akan dijalankan.|saniah XI-rpl -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    body{
        background-image: url("pastel.jpg");
        background-color:blue;
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
                    <img src='aku.jpg' width='100' height='90' style="float: left;"/>
                </td>
                <td>Saniah</td>
                <td>2223614</td>
                <td>XI</td>
                <td>RPL</td>
            </tr>
    </table>
    </center>
    <center>
<?php
$a = 15;
$b = 8;
 
if ($a > $b) {
  echo "a lebih besar daripada b";
} 
elseif ($a == $b) {
  echo "a sama besar dengan b";
} 
else {
  echo "a lebih kecil daripada b";
}
?>
</center>
</body>
</html>
<?php
