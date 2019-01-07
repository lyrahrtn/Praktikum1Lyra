<?php 
    $nama = "Firdausa"; 
    $kelas = "12";
    $alamat = "sawojajar";
    function tampil_nama() {  
        global $nama;  
        echo "Nama Saya : ".$nama; 
        echo "<br>";
    } 
    function tampil_kelas() {  
        global $kelas;  
        echo "Saya kelas ".$kelas; 
        echo "<br>";
    } 
    function tampil_alamat() {  
        global $alamat;  
        echo "Saya tinggal di ".$alamat; 
    } 
    tampil_nama(); 
    tampil_kelas();
    tampil_alamat();
?> 