<?php
include 'koneksi.php';
$ID_Jadwal = $_POST['ID_Jadwal'];
$Thn_ajaran = $_POST['Thn_ajaran'];
$Semester = $_POST['Semester'];
$Kelas = $_POST['Kelas'];
$Waktu = $_POST['Waktu'];
$Hari = $_POST['Hari'];
$Matkul = $_POST['Matkul'];

$result = mysqli_query($connection, "INSERT INTO tbl_jadwal_30risky2311510001athr VALUES('$ID_Jadwal', '$Thn_ajaran', '$Semester', '$Kelas', '$Waktu', '$Hari', '$Matkul');");

if($result) {
    echo "<h1>Data Saved Successfully</h1>";
} else {
    echo "<h1>Error, Cannot save Data</h1>";
}
?>
