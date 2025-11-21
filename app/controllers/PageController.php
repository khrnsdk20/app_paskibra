<?php

class PageController
{
    public function beranda()
    {
        $title = "Beranda";
        $content = '../app/views/pages/beranda.php';
        include '../app/views/layouts/main.php';
    }

    public function linimasa()
    {
        $title = "Linimasa";
        $content = '../app/views/pages/linimasa.php';
        include '../app/views/layouts/main.php';
    }

    public function program()
    {
        $title = "Program";
        $content = '../app/views/pages/program.php';
        include '../app/views/layouts/main.php';
    }
}
