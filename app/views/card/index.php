<div class="container py-4">
    <h3>Kartu Anggota</h3>

    <div class="card shadow mt-4">
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

            <a href="?page=kartu-anggota-download" class="btn btn-primary mt-3">Download Kartu</a>

        </div>
    </div>
</div>
