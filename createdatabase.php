<?php
    include("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS);

    if($cnn){
        
        $sql = "CREATE DATABASE " . DBNAME;
        $hasil = mysqli_query($cnn, $sql );
        if($hasil){
            echo "Pembuatan database" . DBNAME . "Sukses";  
        }else{
            echo "Pembuatan database" . DBNAME . "Gagal";  
        }
    }else{
        echo "koneksi ke Mysql Gagal";
    }