<?php
    if (!defined('INDEX')) die("");
?>
<div class="container-fluid h-100">
<div class="jumbotron mt-2">
<h3>Tambah Pegawai</h3>
<hr>
</div>

<form class="bg-light p-2" method="post" action="?hal=pegawai_insert" enctype="multipart/form-data">
    <div class="form-group row mb-1">
        <label class="col-sm-2 col-form-label">Foto</label>
        <div class="col-sm-4">
            <div class="custom-file">
                <label for="foto" class="custom-file-label"></label>
                <input class="custom-file-input" type="file" id="foto" name="foto">
            </div>
        </div>
    </div>

    <div class="form-group row mb-1">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-4">  
                <input class="form-control" type="text" id="nama" name="nama">
        </div>
    </div>

    <div class="form-group row mb-1">
        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-4">
            <div class="custom-control custom-radio custom-control-inline">
                <input class="custom-control-input" type="radio" id="jkl" name="jk" value="L" checked>
                <label for="jkl" class="custom-control-label">Laki-laki</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input class="custom-control-input" type="radio" id="jkp" name="jk" value="P">
                <label for="jkp" class="custom-control-label">Perempuan</label>
            </div>
        </div>
    </div>

    <div class="form-group row mb-1">
        <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-2">
            <!-- input tanggal menggunakan datetime picker dengan menambahkan script untuk menjalankan plugin datetime picker-->
            <input class="form-control" type="text" id="tanggal" name="tgl_lahir">
        </div>
    </div>
    <div class="form-group row mb-1">
        <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
        <div class="col-sm-4">  
                <select class="custom-select" id="jabatan" name="jabatan">
                    <option value="">-Pilih Jabatan-</option>
                    <?php
                        $queryjabatan=mysqli_query($con,"SELECT * FROM jabatan");
                        while ($j=mysqli_fetch_array($queryjabatan)){
                            echo"<option value='$j[id_jabatan]'> $j[nama_jabatan]</option>";
                        }
                    ?>
                </select>
        </div>
    </div>

    <div class="form-group row mb-1">
        <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
        <div class="col-sm-10">  
                <textarea class="form-control" id="keterangan" name="keterangan"></textarea>
        </div>
    </div>

    <button type="submit" class="btn btn-info"><i class="oi oi-task"></i>Simpan</button>
    <button type="reset" class="btn btn-warning"><i class="oi oi-circle-x"></i>Batal</button>
</form>
</div>