<?php
    if (!defined('INDEX')) die("");
    if (file_exists("img/$_GET[foto]")) unlink("img/$_GET[foto]");
    else ;
    $query=mysqli_query($con,"DELETE FROM pegawai WHERE id_pegawai='$_GET[id]'");
    if($query){
        echo"<div class='alert alert-success alert-dismissible fade show' role='alert'>Data berhasil dihapus
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
    echo "<Meta http-equiv='refresh' content='1;url=?hal=pegawai'>"; 
    }else{
        echo"<div class='alert alert-danger alert-dismissible fade show' role='alert'>Tidak dapat menghapus data! <br>"
    .mysqli_error($con).
    "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
    echo "<Meta http-equiv='refresh' content='10;url=?hal=pegawai_tambah'>";
    }
?>