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
<?php
echo "Hello";
print "Hello";
?>
<h5>string length</h5>
<?php
echo strlen("Hello world!");//fungsi strlen() menghitung berapa banyak jumlah karakter yang ada di dalam sebuah String.|saniah XI-rpl
?> 
<h5>word count</h5>
<?php //str_word_count() adalah salah satu fungsi untuk menghitung jumlah kata yang ada dalam data string.
echo str_word_count("Hello world!");
?> 
<h5>strpos</h5>
 <?php //digunakan untuk mencari posisi sebuah karakter atau sebuah string di dalam string lainnya
echo strpos("Hello world!", "world");
?> 
 </center>
</body>
</html>
