<?php
// Cek jika variabel $koneksi belum ada (jika file dibuka langsung untuk testing)
if (!isset($koneksi)) {
    include_once '../koneksi.php';
}

// Mengambil data user (Contoh mengambil data Nabila dari tabel users)
// Dalam sistem asli, biasanya menggunakan $_SESSION['id_user']
$query = mysqli_query($koneksi, "SELECT * FROM users LIMIT 1");
$user = mysqli_fetch_assoc($query);
?>

<style>
    .profile-card {
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        max-width: 500px;
        margin: 20px auto;
        text-align: center;
    }

    .profile-img {
        width: 120px;
        height: 120px;
        background: #3498db;
        color: white;
        font-size: 50px;
        line-height: 120px;
        border-radius: 50%;
        margin: 0 auto 20px;
        font-weight: bold;
    }

    .profile-info {
        text-align: left;
        margin-top: 20px;
    }

    .info-group {
        margin-bottom: 15px;
        border-bottom: 1px solid #eee;
        padding-bottom: 10px;
    }

    .info-label {
        font-weight: bold;
        color: #7f8c8d;
        font-size: 14px;
        display: block;
    }

    .info-value {
        font-size: 18px;
        color: #2c3e50;
    }

    .status-badge {
        background: #27ae60;
        color: white;
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 12px;
    }
</style>

<div class="profile-card">
    <div class="profile-img">
        <?php echo substr($user['name'] ?? 'U', 0, 1); ?>
    </div>
    
    <h2>Informasi Profil</h2>
    
    <div class="profile-info">
        <div class="info-group">
            <span class="info-label">Nama Lengkap</span>
            <span class="info-value"><?php echo $user['name'] ?? 'Data tidak ditemukan'; ?></span>
        </div>

        <div class="info-group">
            <span class="info-label">Username</span>
            <span class="info-value"><?php echo $user['username'] ?? '-'; ?></span>
        </div>

        <div class="info-group">
            <span class="info-label">Email</span>
            <span class="info-value"><?php echo $user['email'] ?? '-'; ?></span>
        </div>

        <div class="info-group">
            <span class="info-label">Role / Jabatan</span>
            <span class="info-value">
                <span class="status-badge">Administrator</span>
            </span>
        </div>
    </div>
</div>