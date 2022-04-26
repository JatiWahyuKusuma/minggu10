<?php
    include "myconnection.php";

    $id=$_GET["myid"];
    $name=$_GET["myname"];
    $addres=$_GET["myaddres"];
    $foto=$_GET["myfoto"];

    $query = "UPDATE student SET foto='$foto', name='$name' addres='$addres' WHERE id=$id";

    if(mysqli_query($connect, $query)){
        header('Location:homeCRUD.php');
    }
    else{
        echo "Gagal mengubah data <br>". mysqli_error($connect);
    }

    mysqli_close($connect);
?>
