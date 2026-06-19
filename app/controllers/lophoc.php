<?php

require_once '../app/core/Controller.php';

class lophoc extends Controller
{
    public function index()
    {
        $lophocModel = $this->model('lophocModel');

        $lophocs = $lophocModel->getAllLopHoc();

        $this->view('lophoc/index', [
            'lophocs' => $lophocs
        ]);
    }

    public function create()
    {
        $this->view('lophoc/create');
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $lophocModel = $this->model('lophocModel');

            $lophocModel->insertLopHoc(
                $_POST['malop'],
                $_POST['tenlop']
            );

            header('Location: /PNNM_68PM3_HoangDucViet_0028868/public/lophoc/index');
            exit();
        }
    }

    public function edit($id)
    {
        $lophocModel = $this->model('lophocModel');

        $lophoc = $lophocModel->getLopHocById($id);

        $this->view('lophoc/edit', [
            'lophoc' => $lophoc
        ]);
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $lophocModel = $this->model('lophocModel');

            $lophocModel->updateLopHoc(
                $_POST['id'],
                $_POST['malop'],
                $_POST['tenlop']
            );

            header('Location: /PNNM_68PM3_HoangDucViet_0028868/public/lophoc/index');
            exit();
        }
    }

    public function delete($id)
    {
        $lophocModel = $this->model('lophocModel');

        $lophocModel->deleteLopHoc($id);

        header('Location: /PNNM_68PM3_HoangDucViet_0028868/public/lophoc/index');
        exit();
    }
}