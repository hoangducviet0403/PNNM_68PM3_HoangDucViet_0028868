<div class="login-wrapper">
    <div class="login-card">
        <h1>Đăng nhập</h1>

        <?php if (isset($_GET['error'])): ?>
            <div class="alert-error">
                Sai tên đăng nhập hoặc mật khẩu
            </div>
        <?php endif; ?>

        <form action="/PNNM_68PM3_HoangDucViet_0028868/public/auth/login" method="POST">
            <div class="form-group">
                <label>Tên đăng nhập</label>
                <input class="form-control" type="text" name="username" required>
            </div>

            <div class="form-group">
                <label>Mật khẩu</label>
                <input class="form-control" type="password" name="password" required>
            </div>

            <div class="form-group">
                <label>
                    <input type="checkbox" name="remember">
                    Ghi nhớ đăng nhập
                </label>
            </div>

            <button class="btn btn-primary" type="submit" style="width:100%;">
                Đăng nhập
            </button>
        </form>
    </div>
</div>
