<?php
include "koneksi.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi,"insert into tbl_jadwal_30risky2311510001athr set
    ID_Jadwal = '$_POST[ID_Jadwal]',
    Thn_ajaran = '$_POST[Thn_ajaran]',
    Semester = '$_POST[Semester]',
    Kelas = '$_POST[Kelas]',
    Waktu = '$_POST[Waktu]',
    Hari = '$_POST[Hari]',
    Matkul ='$_POST[Matkul]'");

    echo "Data berhasil disimpan";
}
?>    
