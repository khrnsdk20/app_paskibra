<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">

        <a class="navbar-brand" href="?page=beranda">Paskibra Spansa Sera</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item"><a class="nav-link" href="?page=beranda">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="?page=linimasa">Linimasa</a></li>
                <li class="nav-item"><a class="nav-link" href="?page=program">Program</a></li>

                <?php if (!isset($_SESSION['user'])): ?>
                    <li class="nav-item"><a class="nav-link" href="?page=login">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="?page=register">Daftar</a></li>
                <?php else: ?>
                    <li class="nav-item"><a class="nav-link text-danger" href="?page=logout">Logout</a></li>
                <?php endif; ?>
                <?php if (isset($_SESSION['user_id'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=profile">Profil Saya</a>
                    </li>
                <?php endif; ?>


            </ul>

        </div>
    </div>
</nav>