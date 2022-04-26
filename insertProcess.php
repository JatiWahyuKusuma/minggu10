<?php

    include "myconnection.php";

    $name = $_POST["myname"];
    $addres = $_POST["myaddres"];
    $gambar = $_FILES['myfoto']['name'];
    $tmpSementara = $_FILES['myfoto']['tmp_name'];
    
    $lokasiUpload = "img/";
    
    move_uploaded_file($tmpSementara, $lokasiUpload . $gambar);
    

    $query = "INSERT INTO student (name,addres,foto)
                VALUES ('$name', '$addres', '$gambar')";
    
    if(mysqli_query($connect, $query)){
        echo "Data Baru berhasil ditambahkan ";
    }
    else{
        echo "Data baru gagal ditambahkan<br> ". mysqli_error($connect);
    }
    
    mysqli_close($connect);
?>