<!DOCTYPE html>
<html>
    <header>
        <title>Data Jadwal</title>
        <link rel="stylesheet" href="./assets/css/index.css">
    </header>
    <body>
        <div>
            <h1>Data Jadwal</h1>
            <form action="" method="post">
                <table border = 0>
                    <tr>
                        <td>ID.Jadwal</td>
                        <td><input type = "text" name = "ID_Jadwal"></td>
                    </tr>
                    <tr>
                        <td>Tahun Ajaran</td>
                        <td><input type = "text" name = "thn_ajaran"></td>
                    </tr>
                    <tr>
                        <td>Semester</td>
                        <td><input type="text" name="Semester"></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td><input type="text" name="Kelas"></td>
                    </tr>
                    <tr>
                        <td>Waktu</td>
                        <td><input type="text" name="Waktu"></td>
                    </tr>
                    <tr>
                        <td>Hari</td>
                        <td><input type="text" name="Hari"></td>
                    </tr>
                    <tr>
                    <td>Matkul</td>
                    <td><select name="Matkul">
                        <option disabled="" selected="">--matkul--
                        </option>
                        <option value="sabtu">sabtu</option>
                        <option value="minggu">minggu</option>
                    </select></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN" name="BERHASIL"></td>
                </tr>
            </table>
        </form>

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