<?php 
if (!defined('INDEX') || !defined('ADMIN')) {
    echo"<div class='alert alert-danger alert-dismissible fade show' role='alert'><strong>Anda tidak memiliki akses ke menu ini</storng></div>";
    echo "<Meta http-equiv='refresh' content='2;url=?hal=dashboard'>"; 
}
else{
?>

<h4 class="mt-2">Data Jabatan</h4>
<hr>
<a class="btn btn-success" href="?hal=jabatan_tambah">
    <i class="oi oi-plus"></i>Tambah
</a>
<div class="table-responsive mt-3">
    <table class="table table-sm table-striped table-hover table-bordered">
        <thead>
            <th>No</th>
            <th>Nama Jabatan</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php
            $query = mysqli_query($con, "SELECT * FROM jabatan ORDER BY id_jabatan DESC");
            $no = 0;
            while ($data = mysqli_fetch_array($query)) {
                $no++;
            ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $data['nama_jabatan'] ?></td>
                    <td>
                        <a class="btn btn-info btn-sm" href="?hal=jabatan_edit&id=<?= $data['id_jabatan'] ?>"><i class="oi oi-pencil"></i>Edit</a>
                        <a class="btn btn-danger btn-sm" href="?hal=jabatan_hapus&id=<?= $data['id_jabatan'] ?>"><i class="oi oi-trash"></i>Hapus</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
<?php
}
?>