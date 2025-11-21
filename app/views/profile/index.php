<div class="container py-4">
    <h3 class="mb-3">Profil Saya</h3>

    <div class="row">

        <!-- KOLOM INFORMASI AKUN -->
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header bg-primary text-white">Informasi Akun</div>
                <div class="card-body">
                    <p><strong>Nama:</strong> <?= $user['nama'] ?></p>
                    <p><strong>Email:</strong> <?= $user['email'] ?></p>
                    <p><strong>NIS:</strong> <?= $user['nis'] ?></p>
                    <p><strong>Angkatan:</strong> <?= $user['angkatan'] ?></p>
                    <p><strong>Status:</strong>
                        <span class="badge bg-<?= $user['status'] == 'aktif' ? 'success' : ($user['status'] == 'purna' ? 'secondary' : 'warning') ?>">
                            <?= strtoupper($user['status']) ?>
                        </span>
                    </p>
                </div>
            </div>

            <!-- TOMBOL DI DALAM KOLOM -->
            <a href="?page=kartu-anggota" class="btn btn-outline-primary mb-3">
                Lihat Kartu Anggota
            </a>
        </div>

        <!-- KOLOM KARTU ANGGOTA -->
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-dark text-white">
                    Kartu Anggota Paskibra
                </div>
                <div class="card-body text-center">

                    <div class="border p-3 rounded" style="background:#f5f5f5">
                        <h5>PASKIBRA SPANSA SERA</h5>
                        <hr>

                        <p><strong><?= $user['nama'] ?></strong></p>
                        <p>NIS: <?= $user['nis'] ?></p>
                        <p>Angkatan: <?= $user['angkatan'] ?></p>
                        <p>Status: <?= strtoupper($user['status']) ?></p>

                        <hr>
                        <small>ID: <?= $user['id'] ?></small>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
