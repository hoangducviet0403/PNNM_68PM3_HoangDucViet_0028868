<h1>Thêm sinh viên</h1>

<form action="/PNNM_68PM3_HoangDucViet_0028868/public/sinhvien/store" method="POST">

    <p>
        <label>Họ tên</label><br>
        <input type="text" name="hoten" required>
    </p>

    <p>
        <label>Giới tính</label><br>
        <input type="radio" name="gioitinh" value="Nam" checked> Nam
        <input type="radio" name="gioitinh" value="Nữ"> Nữ
    </p>

    <p>
        <label>MSSV</label><br>
        <input type="text" name="mssv" required>
    </p>

    <p>
        <label>Lớp</label><br>
        <select name="lophoc_id" required>
            <?php foreach ($lophocs as $lop): ?>
                <option value="<?php echo $lop['id']; ?>">
                    <?php echo $lop['malop'] . ' - ' . $lop['tenlop']; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </p>

    <button type="submit">Thêm sinh viên</button>
</form>
