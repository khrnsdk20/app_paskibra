<?php

class CardController
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

        $title = "Kartu Anggota";
        $content = "../app/views/card/index.php";
        include "../app/views/layouts/main.php";
    }

    public function download()
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

        // Load mPDF
        require '../vendor/autoload.php';
        $mpdf = new \Mpdf\Mpdf();

        // Render view untuk PDF
        ob_start();
        include "../app/views/card/pdf.php";
        $html = ob_get_clean();

        $mpdf->WriteHTML($html);
        $mpdf->Output("kartu-anggota.pdf", "D");
    }
}
