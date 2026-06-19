<h1>Sửa sinh viên</h1>

<form action="/PNNM_68PM3_HoangDucViet_0028868/public/sinhvien/update" method="POST">

    <p>
        <label>MSSV</label><br>
        <input type="text" name="mssv" value="<?= $sinhvien['mssv'] ?>" readonly>
    </p>

    <br>

    <p>
        <label>Họ tên</label><br>
        <input type="text" name="hoten" value="<?= $sinhvien['hoten'] ?>" required>
    </p>

    <br>

    <p>
        <label>Giới tính</label><br>

        <input type="radio" name="gioitinh" value="Nam"
            <?= $sinhvien['gioitinh'] == 'Nam' ? 'checked' : '' ?>>
        Nam

        <input type="radio" name="gioitinh" value="Nữ"
            <?= $sinhvien['gioitinh'] == 'Nữ' ? 'checked' : '' ?>>
        Nữ
    </p>

    <br>

     <p>
        <label>Lớp</label><br>
        <input type="text" name="lop" value="<?= $sinhvien['lop'] ?>" required>
    </p>

    <br>
    
    <button type="submit">Cập nhật</button>

</form>
