<!-- Form merupakan sintaks HTML yang berisi kumpulan kolom isian data, misal:
-form login yang berisi isian nama pengguna dan kata sandi.
-form pendaftaran yang berisi isian nama, jenis kelamin, tanggal lahir, alamat, surel, dan lain-lain.|saniah XI-rpl -->
<!DOCTYPE HTML>
<html>  
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
    <h1></h1>
<center>
<form action="welcome.php" method="post">
Nama: <input type="text" name="name"><br>
<h1></h1>
Email: <input type="text" name="email"><br>
<h1></h1>
<input type="submit">
</form>
</center>
</body>
</html>