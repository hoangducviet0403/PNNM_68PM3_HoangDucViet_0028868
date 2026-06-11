<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Quản lý sinh viên' ?></title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family: Arial, sans-serif;
            background:#f4f6f9;
        }

        .header{
            background:#2563eb;
            color:white;
            padding:20px 40px;
            display:flex;
            justify-content:space-between;
            align-items:center;
        }

        .header h2{
            font-size:28px;
        }

        .menu a{
            color:white;
            text-decoration:none;
            margin-left:20px;
            font-weight:bold;
        }

        .menu a:hover{
            text-decoration:underline;
        }

        .container{
            width:90%;
            margin:30px auto;
            background:white;
            padding:25px;
            border-radius:10px;
            box-shadow:0 2px 10px rgba(0,0,0,0.1);
            min-height:500px;
        }

        footer{
            background:#1f2937;
            color:white;
            text-align:center;
            padding:15px;
            margin-top:30px;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        table th{
            background:#2563eb;
            color:white;
            padding:12px;
        }

        table td{
            padding:10px;
            border-bottom:1px solid #ddd;
        }

        table tr:nth-child(even){
            background:#f8fafc;
        }

        table tr:hover{
            background:#e0f2fe;
        }

        .btn{
            display:inline-block;
            background:#2563eb;
            color:white;
            padding:10px 16px;
            border-radius:6px;
            text-decoration:none;
        }

        .btn:hover{
            background:#1d4ed8;
        }

        .pagination {
            margin-top: 25px;
            text-align: center;
        }

        .pagination a {
            display: inline-block;
            padding: 8px 13px;
            margin: 0 4px;
            background: #e5e7eb;
            color: #111827;
            text-decoration: none;
            border-radius: 6px;
        }

        .pagination a:hover {
            background: #2563eb;
            color: white;
        }

        .pagination a.active {
            background: #2563eb;
            color: white;
        }
    </style>

</head>
<body>

<header class="header">

    <h2>Quản lý sinh viên</h2>

    <nav class="menu">
        <a href="/PNNM_68PM3_HoangDucViet_0028868/public/home/index">Trang chủ</a>
        <a href="/PNNM_68PM3_HoangDucViet_0028868/public/sinhvien/index">Sinh viên</a>
        <a href="/PNNM_68PM3_HoangDucViet_0028868/public/auth/logout">Đăng xuất</a>
    </nav>

</header>

<div class="container">
