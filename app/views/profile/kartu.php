<div class="card" style="width: 350px; margin: auto; padding: 20px; border: 1px solid #ddd; border-radius: 10px; text-align:center">

    <h2 style="margin-bottom: 10px;">Kartu Anggota</h2>

    <div style="font-size: 16px; text-align:left; margin-top:20px;">
        <p><strong>Nama:</strong> <?= $user['nama']; ?></p>
        <p><strong>NIS:</strong> <?= $user['nis']; ?></p>
        <p><strong>Angkatan:</strong> <?= $user['angkatan']; ?></p>
        <p><strong>Status:</strong> <?= ucfirst($user['status']); ?></p>
        <p><strong>Role:</strong> <?= ucfirst($user['role']); ?></p>
    </div>

    <div style="margin-top:20px;">
        <a href="?page=kartu-anggota-pdf" class="btn btn-primary">Download PDF</a>
    </div>

</div>