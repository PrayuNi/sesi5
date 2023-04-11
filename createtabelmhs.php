<?php
    include("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);

    if($cnn){
        $tbel="tbMHS";
        $sql = "CREATE TABLE $tbel(
           id  INT UNSIGNED AUTO_INCREMENT  Primary key,
           nama varchar(35),
           nim varchar (10),
           alamat varchar (255),
           telp varchar (15),
           prodi varchar (25),
           jeniskelamin varchar (1),
           tgllahir date
           

        )";
        $hasil = mysqli_query($cnn, $sql );
        if($hasil){
            echo "Pembuatan tabel " . $tbel . " Sukses";  
        }else{
            echo "Pembuatan tabel " . $tbel . " Gagal";  
        }
    }else{
        echo "koneksi ke Mysql Gagal";
    }