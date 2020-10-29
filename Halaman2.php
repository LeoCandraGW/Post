<?php
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th colspan='2' bgcolor='yellow'>Form Pendaftaran</th>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Nama</th>";
    echo "<th>".$_POST["nama"];
    echo "</tr>";
    echo "<tr>";
    echo "<th>Alamat</th>";
    echo "<th>".$_POST["alamat"];
    echo "</tr>";
    echo "<tr>";
    echo "<th>Jenis Kelamin</th>";
    echo "<th>".$_POST["jk"];
    echo "</tr>";
    echo "<tr>";
    echo "<th>Pekerjaan</th>";
    echo "<th>".$_POST["job"];
    echo "</tr>";
    
?>