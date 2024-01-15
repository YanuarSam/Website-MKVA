<?php
$koneksi = mysqli_connect("localhost", "root", "", "MKVA");

$Nama = $_POST['Nama']
$Umur = $_POST['Umur']
$Email = $_POST['Email']
$Jenis_Kelamin = $_POST['Jenis_Kelamin']
$Agama = $_POST['Agama']
$Komentar = $_POST['Komentar']
$Submit = $_POST['Submit']

$query = "INSERT INTO MKVA VALUES('$Nama', '$Umur', '$Email', '$Jenis_Kelamin', '$Agama', '$Komentar', '$Submit')";

mysqli_query($koneksi, $query);
?>