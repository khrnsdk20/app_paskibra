<?php

class AdminController
{
    private $db;
    private $user;

    public function __construct()
    {
        require '../config/database.php';
        require '../app/models/User.php';

        $this->db   = $conn;
        $this->user = new User($conn);

        // Akses hanya untuk admin
        session_start();
        if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
            echo "<script>alert('Akses ditolak!'); window.location='?page=login';</script>";
            exit;
        }
    }

    public function anggota()
    {
        $title = "Kelola Anggota";
        $data  = $this->user->all();

        $content = '../app/views/admin/anggota.php';
        include '../app/views/layouts/main.php';
    }

    public function verifikasi()
    {
        $id     = $_GET['id'];
        $status = "aktif";

        $this->user->updateStatus($id, $status);

        echo "<script>alert('Anggota diverifikasi!'); window.location='?page=admin-anggota';</script>";
    }

    public function updateStatus()
    {
        $id     = $_GET['id'];
        $status = $_GET['status']; // aktif | purna

        $this->user->updateStatus($id, $status);

        echo "<script>alert('Status diperbarui!'); window.location='?page=admin-anggota';</script>";
    }

    public function delete()
    {
        $id = $_GET['id'];

        $this->user->delete($id);

        echo "<script>alert('Data anggota dihapus!'); window.location='?page=admin-anggota';</script>";
    }
}
