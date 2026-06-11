<?php
class auth {

    protected $user = [
        "viethd" => "123456",
        "admin" => "123456"
    ];

    public function login()
    {
        session_start();

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $username = $_POST['username'];
            $password = $_POST['password'];

            if(isset($this->user[$username]) && $this->user[$username] == $password){

                $_SESSION['username'] = $username;

                if(isset($_POST['remember'])){
                    setcookie('username', $username, time() + 3600, '/');
                }

                header("Location: /PNNM_68PM3_HoangDucViet_0028868/public/home/index");
                exit();

            } else {

                header("Location: /PNNM_68PM3_HoangDucViet_0028868/public/auth/login?error=1");
                exit();
            }
        }
        else {

            require_once '../app/views/home/login.php';
        }
    }

    public function logout()
    {
        session_start();

        $_SESSION = [];

        session_destroy();

        setcookie('username', '', time() - 3600, '/');

        header("Location: /PNNM_68PM3_HoangDucViet_0028868/public/auth/login");
        exit();
    }
}
?>
