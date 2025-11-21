<div class="container mt-4">

    <h3 class="mb-3">Kelola Anggota</h3>

    <table class="table table-bordered table-striped">
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>NIS</th>
                <th>Angkatan</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php while ($u = $data->fetch_assoc()) : ?>
            <tr>
                <td><?= $u['id'] ?></td>
                <td><?= $u['nama'] ?></td>
                <td><?= $u['email'] ?></td>
                <td><?= $u['nis'] ?></td>
                <td><?= $u['angkatan'] ?></td>
                <td>
                    <?php if ($u['status'] == 'menunggu') : ?>
                        <span class="badge bg-warning">Menunggu</span>
                    <?php elseif ($u['status'] == 'aktif') : ?>
                        <span class="badge bg-success">Aktif</span>
                    <?php else : ?>
                        <span class="badge bg-secondary">Purna</span>
                    <?php endif; ?>
                </td>

                <td>

                    <?php if ($u['status'] == 'menunggu') : ?>
                        <a href="?page=admin-verifikasi&id=<?= $u['id'] ?>" class="btn btn-sm btn-success">Verifikasi</a>
                    <?php endif; ?>

                    <?php if ($u['status'] == 'aktif') : ?>
                        <a href="?page=admin-update-status&id=<?= $u['id'] ?>&status=purna" class="btn btn-sm btn-warning">Jadikan Purna</a>
                    <?php endif; ?>

                    <?php if ($u['status'] == 'purna') : ?>
                        <a href="?page=admin-update-status&id=<?= $u['id'] ?>&status=aktif" class="btn btn-sm btn-info">Jadikan Aktif</a>
                    <?php endif; ?>

                    <a onclick="return confirm('Hapus anggota ini?')" 
                       href="?page=admin-delete&id=<?= $u['id'] ?>" 
                       class="btn btn-sm btn-danger">Hapus</a>
                </td>

            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

</div>
