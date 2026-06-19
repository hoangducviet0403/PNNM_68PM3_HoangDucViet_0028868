<h1>Sửa lớp học</h1>

<form action="/PNNM_68PM3_HoangDucViet_0028868/public/lophoc/update"
      method="POST">

    <input type="hidden"
           name="id"
           value="<?= $lophoc['id']; ?>">

    <p>
        <label>Mã lớp</label><br>
        <input type="text"
               name="malop"
               value="<?= $lophoc['malop']; ?>"
               required>
    </p>

    <br>

    <p>
        <label>Tên lớp</label><br>
        <input type="text"
               name="tenlop"
               value="<?= $lophoc['tenlop']; ?>"
               required>
    </p>

    <br>

    <button type="submit">
        Cập nhật
    </button>

</form>