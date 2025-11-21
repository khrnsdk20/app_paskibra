<?php

class AuthController
{
    private $db;

    public function __construct()
    {
        require __DIR__ . '/../../config/database.php';
        session_start();
        $this->db = $conn;
    }

    public function register()
    {
        $title = "Daftar";
        $content = '../app/views/auth/register.php';
        include '../app/views/layouts/main.php';
    }

    public function registerProcess()
    {
        $nama     = $_POST['nama'];
        $email    = $_POST['email'];
        $pass     = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $nis      = $_POST['nis'];
        $angkatan = $_POST['angkatan'];

        $stmt = $this->db->prepare("INSERT INTO users(nama,email,password,nis,angkatan) VALUES(?,?,?,?,?)");
        $stmt->bind_param("sssss", $nama, $email, $pass, $nis, $angkatan);
        $stmt->execute();

        echo "<script>alert('Pendaftaran berhasil!'); window.location='?page=login';</script>";
    }

    public function login()
    {
        $title = "Login";
        $content = '../app/views/auth/login.php';
        include '../app/views/layouts/main.php';
    }

    public function loginProcess()
    {
        $email = $_POST['email'];
        $pass  = $_POST['password'];

        $stmt = $this->db->prepare("SELECT * FROM users WHERE email=? LIMIT 1");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $user = $stmt->get_result()->fetch_assoc();

        if ($user && password_verify($pass, $user['password'])) {
            $_SESSION['user'] = $user;
            header("Location: ?page=beranda");
            exit;
        }

        echo "<script>alert('Login gagal!'); window.location='?page=login';</script>";
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header("Location: ?page=beranda");
    }
}
