<?php

class middleware
{
    public function checklogin()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION['username'])) {
            header("Location: /PNNM_68PM3_HoangDucViet_0028868/public/auth/login");
            exit();
        }
    }

    public function checklogout()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if (isset($_SESSION['username'])) {
            header("Location: /PNNM_68PM3_HoangDucViet_0028868/public/home/index");
            exit();
        }
    }
}
?>
