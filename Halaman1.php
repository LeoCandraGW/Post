<?php
    echo "<form method='post' action='Halaman2.php'>";
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th colspan='2' bgcolor='yellow'>Form Pendaftaran</th>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Nama</th>";
    echo "<th><input type='text' name='nama'>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Alamat</th>";
    echo "<th><input type='text' name='alamat'></th>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Jenis Kelamin</th>";
    echo "<th>";
    echo "<input type='radio' name='jk' value='Laki-Laki'>Laki-Laki";
    echo "&nbsp";
    echo "<input type='radio' name='jk' value='Perempuan'>Perempuan";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Pekerjaan</th>";
    echo "<th>";
    echo "<select name='job'>";
        echo "<option value='pelajar'>Pelajar</option>";
        echo "<option value='mahasiswa'>Mahasiswa</option>";
        echo "<option value='pegawai'>Pegawai</option>";
        echo "<option value='wiraswasta'>Wiraswasta</option>";
    echo "</tr>";
    echo "<tr>";
    echo "<th colspan='2' bgcolor='red'><input type='submit' value='Daftar'></th>";
    echo "</tr>";


?>