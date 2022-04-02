<?php
if (!defined('INDEX')) die("");
$foto = $_FILES['foto']['name'];
$lokasi = $_FILES['foto']['tmp_name'];
$tipefile = $_FILES['foto']['type'];
$ukuranfile = $_FILES['foto']['size'];


$error = "";
//Jika foto kosong,simpan data saja
if ($foto == "") {
    $query = mysqli_query($con, "INSERT INTO pegawai SET
    nama_pegawai = '$_POST[nama]',
    jenis_kelamin = '$_POST[jk]',
    tgl_lahir = '$_POST[tgl_lahir]',
    id_jabatan = '$_POST[jabatan]',
    keterangan = '$_POST[keterangan]'");
}
//Jika foto ada
else {
    if ($tipefile != "image/jpeg" and $tipefile != "image/jpg" and $tipefile != "image/png") {
        $error = "Tipe file tidak didukung";
    } else if ($ukuranfile > 1000000) {
        $error = "Ukuran file terlalu besar (lebih dari 1 MB) !";
    } else {
        $foto = strval(date_timestamp_get($date))."_".$foto;
        move_uploaded_file($lokasi, "img/" . $foto);
        $query = mysqli_query($con, "INSERT INTO pegawai SET
        foto = '$foto',
        nama_pegawai = '$_POST[nama]',
        jenis_kelamin = '$_POST[jk]',
        tgl_lahir = '$_POST[tgl_lahir]',
        id_jabatan = '$_POST[jabatan]',
        keterangan = '$_POST[keterangan]'");
    }
}

if($error!=""){
    echo"<div class='alert alert-success alert-dismissible fade show' role='alert'>".$error.
    "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
    echo "<Meta http-equiv='refresh' content='2;url=?hal=pegawai_tambah'>";
}else if($query){
    echo"<div class='alert alert-success alert-dismissible fade show' role='alert'>Data berhasil disimpan
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
    echo "<Meta http-equiv='refresh' content='2;url=?hal=pegawai'>"; 
}else{
    echo"<div class='alert alert-danger alert-dismissible fade show' role='alert'>Tidak dapat menyimpan data! <br>"
    .mysqli_error($con).
    "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
    echo "<Meta http-equiv='refresh' content='2;url=?hal=pegawai_tambah'>";
}
?>