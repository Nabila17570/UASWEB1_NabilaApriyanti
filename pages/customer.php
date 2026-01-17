<?php
include "koneksi.php"; // Pastikan file koneksi sudah benar

// Ambil data dari tabel pelanggan yang baru Anda buat
$query = mysqli_query($koneksi, "SELECT * FROM pelanggan");
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<table class="table table-dark table-striped">
</table>
<div class="p-4">
    <h4>Data Pelanggan</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            while($d = mysqli_fetch_array($query)){ 
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['kode_pelanggan']; ?></td>
                <td><?php echo $d['nama_pelanggan']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['no_hp']; ?></td>
                <td><?php echo $d['email']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>