<?php
require_once '../app/core/App.php';
class middleware
{
  function checklogin()
    {
        $publicPages = ['/home/login', '/auth/login'];

        if (!isset($_SESSION['username']) && !in_array($_SERVER['REQUEST_URI'], $publicPages)) {
            header('Location: /PNNM_68PM3_HoangDucViet_0028868/public/auth/login');
            exit();
        }
    }

    public function checklogout()
    {
        if (isset($_SESSION['username'])) {

            header('Location: /PNNM_68PM3_HoangDucViet_0028868/public/home/index');
            exit();
        }
    }
}
?>
