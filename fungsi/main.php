<!DOCTYPE html>
<html>
<body>
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
</body>
<center>
<!-- Fungsi pada PHP dapat dibuat dngan kata kunci function ,
 lalu diikuti dengan nama fungsinya.
  Kode intruksi dapat di tulis di dalam kurung kurawal ( {...} ).
   Fungsi yang sudah dibuat tidak akan menghasilkan apapun kalau tidak dipanggil. 
   Kita dapat memanggil fungsi dengan menuliskan namanya.|saniah XI-rpl -->
<?php
function familyName($fname, $year) {
  echo "{$fname} Refsnes. Born in {$year} <br>";
}
familyName("perkenalkan", "20th");
familyName("saniah","XI-software engineering");
familyName("umur","17th");
familyName("hobi","gatau");
?>
</center>
</body>
</html>
