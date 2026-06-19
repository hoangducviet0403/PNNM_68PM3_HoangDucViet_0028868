<h1>Danh sách sinh viên</h1>

<div class="page-header">
    <a class="btn" href="/PNNM_68PM3_HoangDucViet_0028868/public/sinhvien/create">
        Thêm sinh viên
    </a>
</div>

<form method="GET" action="/PNNM_68PM3_HoangDucViet_0028868/public/sinhvien/index" class="filter-form">

    <input type="text"
           name="keyword"
           placeholder="Tìm theo họ tên hoặc MSSV"
           value="<?php echo $keyword; ?>">

    <select name="lophoc_id">
        <option value="">Tất cả lớp</option>

        <?php foreach ($lophocs as $lop): ?>
            <option value="<?php echo $lop['id']; ?>"
                <?php echo ($lophoc_id == $lop['id']) ? 'selected' : ''; ?>>
                <?php echo $lop['malop'] . ' - ' . $lop['tenlop']; ?>
            </option>
        <?php endforeach; ?>
    </select>

    <button type="submit">Tìm kiếm</button>

    <a class="btn-reset" href="/PNNM_68PM3_HoangDucViet_0028868/public/sinhvien/index">
        Đặt lại
    </a>
</form>

<style>
    h1 {
        text-align: center;
        color: #5b21b6;
        margin-bottom: 25px;
        font-size: 36px;
    }

    .page-header {
        display: flex;
        justify-content: flex-end;
        margin-bottom: 20px;
        width: 100%;
    }

    .btn {
        background: #2563eb;
        color: white;
        text-decoration: none;
        padding: 10px 18px;
        border-radius: 6px;
        font-weight: 600;
    }

    .btn:hover {
        background: #1d4ed8;
    }

    .filter-form {
        display: flex;
        align-items: center;
        gap: 12px;
        background: white;
        padding: 15px;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        margin-bottom: 20px;
        flex-wrap: wrap;
        width: 100%;
    }

    .filter-form input,
    .filter-form select {
        padding: 10px;
        border: 1px solid #d1d5db;
        border-radius: 6px;
        outline: none;
    }

    .filter-form input {
        width: 280px;
    }

    .filter-form select {
        min-width: 220px;
    }

    .filter-form button {
        background: #16a34a;
        color: white;
        border: none;
        padding: 10px 18px;
        border-radius: 6px;
        cursor: pointer;
        font-weight: 600;
    }

    .btn-reset {
        background: #ef4444;
        color: white;
        text-decoration: none;
        padding: 10px 18px;
        border-radius: 6px;
        font-weight: 600;
    }

    table {
        width: 100%;
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
    }

    .pagination {
        margin-top: 20px;
        text-align: center;
    }

    .pagination a {
        display: inline-block;
        padding: 8px 14px;
        margin: 0 4px;
        text-decoration: none;
        background: white;
        color: #7c3aed;
        border: 1px solid #7c3aed;
        border-radius: 6px;
    }

    .pagination a.active,
    .pagination a:hover {
        background: #7c3aed;
        color: white;
    }
</style>

<table>
    <tr>
        <th>ID</th>
        <th>Họ tên</th>
        <th>Giới tính</th>
        <th>MSSV</th>
        <th>Lớp</th>
        <th>Thao tác</th>
    </tr>

    <?php foreach ($sinhviens as $sinhvien): ?>
        <tr>
            <td><?php echo $sinhvien['id']; ?></td>
            <td><?php echo $sinhvien['hoten']; ?></td>
            <td><?php echo $sinhvien['gioitinh']; ?></td>
            <td><?php echo $sinhvien['mssv']; ?></td>
            <td>
                <?php echo $sinhvien['malop']; ?> -
                <?php echo $sinhvien['tenlop']; ?>
            </td>
            <td>
                <a href="/PNNM_68PM3_HoangDucViet_0028868/public/sinhvien/edit/<?php echo $sinhvien['id']; ?>">
                    Sửa
                </a>
                |
                <a href="/PNNM_68PM3_HoangDucViet_0028868/public/sinhvien/delete/<?php echo $sinhvien['id']; ?>"
                   onclick="return confirm('Bạn có chắc muốn xóa sinh viên này không?')">
                    Xóa
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<div class="pagination">
    <?php for ($i = 1; $i <= $totalPage; $i++): ?>
        <a href="/PNNM_68PM3_HoangDucViet_0028868/public/sinhvien/index?page=<?php echo $i; ?>&keyword=<?php echo $keyword; ?>&lophoc_id=<?php echo $lophoc_id; ?>"
           class="<?php echo ($i == $page) ? 'active' : ''; ?>">
            <?php echo $i; ?>
        </a>
    <?php endfor; ?>
</div>
