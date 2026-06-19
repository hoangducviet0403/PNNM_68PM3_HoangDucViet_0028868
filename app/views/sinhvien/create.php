
<h1 class="page-title">Thêm sinh viên</h1>

<div class="card form-box">
    <form action="/PNNM_68PM3_HoangDucViet_0028868/public/sinhvien/store" method="POST">

        <p>
            <label>Họ tên</label><br>
            <input class="form-control" type="text" name="hoten" required>
        </p>

        <p>
            <label>Giới tính</label><br>
            <input type="radio" name="gioitinh" value="Nam" checked> Nam
            <input type="radio" name="gioitinh" value="Nữ"> Nữ
        </p>

        <p>
            <label>MSSV</label><br>
            <input class="form-control" type="text" name="mssv" required>
        </p>

        <p>
            <label>Lớp</label><br>
            <select class="form-control" name="lophoc_id" required>
                <?php foreach ($lophocs as $lop): ?>
                    <option value="<?php echo $lop['id']; ?>">
                        <?php echo $lop['malop'] . ' - ' . $lop['tenlop']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </p>

        <button class="btn btn-success" type="submit">Thêm sinh viên</button>
    </form>
</div>
