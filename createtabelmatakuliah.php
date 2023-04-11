<?php
    include("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);

    if($cnn){
        $tbel="tbmatakuliah";
        $sql = "CREATE TABLE $tbel(
           kodeMK VARCHAR (8) Primary key,
           Matakuliah VARCHAR (50),
           SKS INT
           
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