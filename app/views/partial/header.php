<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'PNNM' ?></title>
</head>
<body>

<?php
$baseUrl = "/PNNM_68PM3_HoangDucViet_0028868/public";
?>

<header>
    <h2>Quản lý sinh viên</h2>

    <nav>
        <a href="<?= $baseUrl ?>/home/index">Trang chủ</a> |
        <a href="<?= $baseUrl ?>/sinhvien/index">Danh sách sinh viên</a> |
        <a href="<?= $baseUrl ?>/auth/logout">Đăng xuất</a>
    </nav>

    <hr>
</header>