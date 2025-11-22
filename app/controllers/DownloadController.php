<?php

class DownloadController
{
    private $db;

    public function __construct()
    {
        require __DIR__ . '/../../config/database.php';
        $this->db = $conn;
    }

    public function download()
    {
        if (!isset($_SESSION['user']['id'])) {
            header("Location: ?page=login");
            exit;
        }

        $id = $_SESSION['user']['id'];

        // ambil user
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $user = $stmt->get_result()->fetch_assoc();

        // file view PDF
        require '../app/views/card/pdf.php';
    }
}
