<?php
    $db_host = 'localhost';
    $db_name = 'semester1';
    $db_port = '';
    $db_user = 'rootmahasiswa';
    $db_pass = '';

    $connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (mysqli_connect_error()) {
        echo "gagal melakukan koneksi ke db_host:$db_host " + mysql_connect_error();
    };
?>
