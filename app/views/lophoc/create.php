
<h1 class="page-title">Sửa lớp học</h1>

<div class="card form-box">
    <form action="/PNNM_68PM3_HoangDucViet_0028868/public/lophoc/update"
      method="POST">

        <input class="form-control" type="hidden"
            name="id"
            value="<?= $lophoc['id']; ?>">

        <p>
            <label>Mã lớp</label><br>
            <input class="form-control" type="text"
                name="malop"
                value="<?= $lophoc['malop']; ?>"
                required>
        </p>

        <br>

        <p>
            <label>Tên lớp</label><br>
            <input class="form-control" type="text"
                name="tenlop"
                value="<?= $lophoc['tenlop']; ?>"
                required>
        </p>

        <br>

        <button class="btn btn-success" type="submit">
            Cập nhật
        </button>

    </form>
</div>
