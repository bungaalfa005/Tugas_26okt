<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
    $NIK=$_POST['NIK'];
    $Jenis=$_POST['JK'];

    $sql="INSERT INTO tb_pembelian(NIK,JK) VALUES('$NIK','$Jenis')";
    $query=mysqli_query($koneksi,$sql);

}
else{("akses ditutup");
}
?>