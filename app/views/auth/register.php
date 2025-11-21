<div class="row justify-content-center">
    <div class="col-md-5">

        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white text-center">
                <h5>Buat Akun Anggota</h5>
            </div>

            <div class="card-body">

                <form action="?page=register-process" method="POST">

                    <div class="mb-3">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>NIS</label>
                        <input type="text" name="nis" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Angkatan</label>
                        <input type="text" name="angkatan" class="form-control" required>
                    </div>

                    <button class="btn btn-primary w-100">Daftar</button>

                </form>

            </div>

            <div class="card-footer text-center">
                Sudah punya akun? <a href="?page=login">Login</a>
            </div>
        </div>

    </div>
</div>
