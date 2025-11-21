<div class="container py-4">

    <h3 class="mb-3">Profil Saya</h3>

    <div class="row">

        <!-- Data Pribadi -->
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header bg-primary text-white">
                    Informasi Pribadi
                </div>
                <div class="card-body">
                    <p><strong>Nama:</strong> <?= $user['nama'] ?></p>
                    <p><strong>Email:</strong> <?= $user['email'] ?></p>
                    <p><strong>NIS:</strong> <?= $user['nis'] ?></p>
                    <p><strong>Angkatan:</strong> <?= $user['angkatan'] ?></p>
                    <p><strong>Status Anggota:</strong> 
                        <span class="badge bg-<?= $user['status'] == 'aktif' ? 'success' : 'warning' ?>">
                            <?= strtoupper($user['status']) ?>
                        </span>
                    </p>
                </div>
            </div>
        </div>

        <!-- Kartu Anggota -->
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    Kartu Anggota
                </div>
                <div class="card-body">

                    <?php if ($user['status'] != 'aktif'): ?>
                        <p class="text-danger">
                            Kartu anggota hanya tersedia jika status Anda sudah AKTIF.
                        </p>
                    <?php else: ?>

                        <div class="p-3 border rounded text-center" style="background:#f8f9fa">
                            <h5>PASKIBRA SPANSASERA</h5>
                            <div class="my-3">
                                <img src="https://ui-avatars.com/api/?name=<?= urlencode($user['nama']) ?>&size=120"
                                    class="rounded-circle shadow">
                            </div>

                            <p class="mb-1"><strong><?= $user['nama'] ?></strong></p>
                            <p class="mb-1">NIS: <?= $user['nis'] ?></p>
                            <p class="mb-1">Angkatan: <?= $user['angkatan'] ?></p>
                            <p class="mt-2"><span class="badge bg-success">Anggota Aktif</span></p>
                        </div>

                    <?php endif; ?>

                </div>
            </div>
        </div>

    </div>
</div>
