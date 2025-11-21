<div class="row justify-content-center">
    <div class="col-md-4">

        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white text-center">
                <h5>Login Anggota</h5>
            </div>

            <div class="card-body">

                <form action="?page=login-process" method="POST">

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Kata Sandi</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <button class="btn btn-primary w-100">Masuk</button>

                </form>
            </div>

            <div class="card-footer text-center">
                Belum punya akun? <a href="?page=register">Daftar</a>
            </div>
        </div>

    </div>
</div>
