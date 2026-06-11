<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinh viên</title>
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f8f6ff;
            min-height: 100vh;
            padding: 30px;
        }

        h1 {
            text-align: center;
            color: #5b21b6;
            margin-bottom: 25px;
            font-size: 36px;
        }

        table {
            width: 100%;
            max-width: 1100px;
            margin: auto;
            border-collapse: collapse;
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(91, 33, 182, 0.15);
        }

        th {
            background: #7c3aed;
            color: white;
            padding: 16px;
            text-align: center;
            font-weight: bold;
        }

        td {
            padding: 14px;
            text-align: center;
            color: #374151;
        }

        tr:nth-child(even) {
            background: #f3f0ff;
        }

        tr:hover {
            background: #ede9fe;
            transition: 0.3s;
        }

        th:first-child,
        td:first-child {
            width: 80px;
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 28px;
            }

            th,
            td {
                padding: 10px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <h1>Danh sách sinh viên</h1>
    <table>
    <tr>
        <th>MSSV</th>
        <th>Họ tên</th>
        <th>Giới tính</th>
    </tr>

    <?php foreach($sinhviens as $sv): ?>
    <tr>
        <td><?= $sv['mssv'] ?></td>
        <td><?= $sv['hoten'] ?></td>
        <td><?= $sv['gioitinh'] ?></td>
    </tr>
    <?php endforeach; ?>
    <?php endforeach; ?>
    </table>
    
    <div class="pagination">
    <?php for ($i = 1; $i <= $totalPage; $i++): ?>
        <a
            href="/PNNM_68PM3_HoangDucViet_0028868/public/sinhvien/index?page=<?= $i ?>"
            class="<?= ($i == $page) ? 'active' : '' ?>"
        >
            <?= $i ?>
        </a>
    <?php endfor; ?>
    </div>
</body>
</html>
