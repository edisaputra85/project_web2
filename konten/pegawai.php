<?php
if (!defined('INDEX')) die("");
?>

<h4 class="mt-2">Data Pegawai</h4>
<hr>
<a class="btn btn-success" href="?hal=pegawai_tambah">
    <i class="oi oi-plus"></i>Tambah
</a>
<div class="table-responsive mt-3">
    <table class="table table-sm table-striped table-hover table-bordered">
        <thead>
            <th>No</th>
            <th>Foto</th>
            <th>Jabatan</th>
            <th>Nama Pegawai</th>
            <th>Tanggal Lahir</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php
            $query = mysqli_query($con, "SELECT * FROM pegawai ORDER BY id_pegawai DESC");
            $no = 0;
            while ($data = mysqli_fetch_array($query)) {
                $no++;
            ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><img src="img/<?= $data['foto']?>" width="100"></td>
                    <td><?= $data['id_jabatan'] ?></td>
                    <td><?= $data['nama_pegawai'] ?></td>
                    <td><?= $data['tgl_lahir'] ?></td>
                    <td><?= $data['keterangan'] ?></td>
                    <td>
                        <a class="btn btn-info btn-sm" href="?hal=pegawai_edit&id=<?= $data['id_pegawai'] ?>"><i class="oi oi-pencil"></i>Edit</a>
                        <a class="btn btn-danger btn-sm" href="?hal=pegawai_hapus&id=<?= $data['id_pegawai'] ?>&foto=<?= $data['foto'] ?>"><i class="oi oi-trash"></i>Hapus</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>