<?php
if (!defined('INDEX')) die("");

$halaman = array ("dashboard","jabatan","pegawai","pegawai_tambah","pegawai_insert","pegawai_hapus","jabatan_tambah","jabatan_edit","jabatan_hapus");
if (isset ($_GET['hal']))$hal=$_GET['hal'];
else $hal="dashboard";

foreach($halaman as $h){
    if ($hal == $h){
        include"konten/$h.php";
        break;
    }
}
?>