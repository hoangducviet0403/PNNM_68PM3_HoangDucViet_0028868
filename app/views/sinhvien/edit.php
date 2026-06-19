
<h1 class="page-title">Sửa sinh viên</h1>

<div class="card form-box">
    <form action="/PNNM_68PM3_HoangDucViet_0028868/public/sinhvien/update" method="POST">

        <p>
            <label>MSSV</label><br>
            <input class="form-control" type="text" name="mssv" value="<?= $sinhvien['mssv'] ?>" readonly>
        </p>

        <br>

        <p>
            <label>Họ tên</label><br>
            <input class="form-control" type="text" name="hoten" value="<?= $sinhvien['hoten'] ?>" required>
        </p>

        <br>

        <p>
            <label>Giới tính</label><br>

            <input type="radio" name="gioitinh" value="Nam"
                <?= $sinhvien['gioitinh'] == 'Nam' ? 'checked' : '' ?>>
            Nam

            <input  type="radio" name="gioitinh" value="Nữ"
                <?= $sinhvien['gioitinh'] == 'Nữ' ? 'checked' : '' ?>>
            Nữ
        </p>

        <br>

        <p>
            <label>Lớp</label><br>
            <select class="form-control" name="lophoc_id" required>
                <?php foreach ($lophocs as $lop): ?>
                    <option value="<?php echo $lop['id']; ?>"
                        <?php echo ($sinhvien['lophoc_id'] == $lop['id']) ? 'selected' : ''; ?>>
                        <?php echo $lop['malop'] . ' - ' . $lop['tenlop']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </p>

        <br>
        
        <button class="btn btn-success" type="submit">Cập nhật</button>

    </form>
</div>
