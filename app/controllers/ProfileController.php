<?php

class ProfileController
{
    private $db;

    public function __construct()
    {
        require '../config/database.php';
        $this->db = $conn;
    }

    public function index()
    {
        if (!isset($_SESSION['user_id'])) {
            header("Location: ?page=login");
            exit;
        }

        $id = $_SESSION['user_id'];

        $query = $this->db->prepare("SELECT * FROM users WHERE id = ?");
        $query->bind_param("i", $id);
        $query->execute();
        $user = $query->get_result()->fetch_assoc();

        $title = "Profil Saya";
        $content = "../app/views/profile/index.php";
        include "../app/views/layouts/main.php";
    }

    public function kartuAnggota()
    {
        if (!isset($_SESSION['user_id'])) {
            header("Location: ?page=login");
            exit;
        }

        $id = $_SESSION['user_id'];

        $query = $this->db->prepare("SELECT * FROM users WHERE id = ?");
        $query->bind_param("i", $id);
        $query->execute();
        $user = $query->get_result()->fetch_assoc();

        $title = "Kartu Anggota";
        $content = "../app/views/profile/kartu.php";
        include "../app/views/layouts/main.php";
    }
}
