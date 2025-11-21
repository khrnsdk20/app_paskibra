<?php

$page = $_GET['page'] ?? 'beranda';

switch ($page) {

    // ==========================
    // AUTH
    // ==========================
    case 'register':
        require '../app/controllers/AuthController.php';
        (new AuthController())->register();
        break;

    case 'register-process':
        require '../app/controllers/AuthController.php';
        (new AuthController())->registerProcess();
        break;

    case 'login':
        require '../app/controllers/AuthController.php';
        (new AuthController())->login();
        break;

    case 'login-process':
        require '../app/controllers/AuthController.php';
        (new AuthController())->loginProcess();
        break;

    case 'logout':
        require '../app/controllers/AuthController.php';
        (new AuthController())->logout();
        break;


    // ==========================
    // PUBLIC PAGES
    // ==========================
    case 'beranda':
        require '../app/controllers/PageController.php';
        (new PageController())->beranda();
        break;

    case 'linimasa':
        require '../app/controllers/PageController.php';
        (new PageController())->linimasa();
        break;

    case 'program':
        require '../app/controllers/PageController.php';
        (new PageController())->program();
        break;


    // ==========================
    // USER PROFILE
    // ==========================
    case 'profile':
        require '../app/controllers/ProfileController.php';
        (new ProfileController())->index();
        break;

    case 'kartu-anggota':
        require '../app/controllers/ProfileController.php';
        (new ProfileController())->kartuAnggota();
        break;



    // ==========================
    // ADMIN MEMBER MANAGEMENT
    // ==========================
    case 'admin-anggota':
        require '../app/controllers/AdminController.php';
        (new AdminController())->anggota();
        break;

    case 'admin-verifikasi':
        require '../app/controllers/AdminController.php';
        (new AdminController())->verifikasi();
        break;

    case 'admin-update-status':
        require '../app/controllers/AdminController.php';
        (new AdminController())->updateStatus();
        break;

    case 'admin-delete':
        require '../app/controllers/AdminController.php';
        (new AdminController())->delete();
        break;



    // ==========================
    // 404 PAGE
    // ==========================
    default:
        echo "404 Not Found";
}
