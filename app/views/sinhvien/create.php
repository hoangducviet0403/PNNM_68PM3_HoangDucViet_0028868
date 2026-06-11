<h1>Thêm sinh viên</h1>

<form action="/PNNM_68PM3_HoangDucViet_0028868/public/sinhvien/store" method="POST">

    <p>
        <label>MSSV</label><br>
        <input type="text" name="mssv" required>
    </p>

    <br>

    <p>
        <label>Họ tên</label><br>
        <input type="text" name="hoten" required>
    </p>

    <br>

    <p>
        <label>Giới tính</label><br>

        <input type="radio" name="gioitinh" value="Nam" checked>
        Nam

        <input type="radio" name="gioitinh" value="Nữ">
        Nữ
    </p>

    <br>

    <button type="submit">
        Thêm sinh viên
    </button>

</form>