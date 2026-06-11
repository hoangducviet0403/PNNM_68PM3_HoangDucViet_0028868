<?php
require_once '../app/core/Controller.php';
require_once '../app/middleware.php';

class home extends Controller
{
    public function __construct()
    {
        $middleware = new middleware();
        $middleware->checklogin();
    }

    public function index()
    {
        $this->view('home/index');
    }

    public function about()
    {
        $this->view('home/about');
    }
}
?>
