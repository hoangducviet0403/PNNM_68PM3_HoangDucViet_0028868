<?php
require_once '../app/core/Controller.php';

class sinhvien extends Controller
{
    public function index()
    {
        $sinhvienModel = $this->model('sinhvienModel');
        $lophocModel = $this->model('lophocModel');

        $limit = 5;
        $page = $_GET['page'] ?? 1;
        $page = (int)$page;

        if ($page < 1) {
            $page = 1;
        }

        $keyword = $_GET['keyword'] ?? '';
        $lophoc_id = $_GET['lophoc_id'] ?? '';

        $offset = ($page - 1) * $limit;

        $totalSinhVien = $sinhvienModel->countSinhVien($keyword, $lophoc_id);
        $totalPage = ceil($totalSinhVien / $limit);

        $sinhviens = $sinhvienModel->getSinhVienPaging($limit, $offset, $keyword, $lophoc_id);
        $lophocs = $lophocModel->getAllLopHoc();

        $this->view('sinhvien/index', [
            'sinhviens' => $sinhviens,
            'lophocs' => $lophocs,
            'page' => $page,
            'totalPage' => $totalPage,
            'keyword' => $keyword,
            'lophoc_id' => $lophoc_id
        ]);
    }

    public function create()
    {
        $lophocModel = $this->model('lophocModel');
        $lophocs = $lophocModel->getAllLopHoc();

        $this->view('sinhvien/create', [
            'lophocs' => $lophocs
        ]);
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $sinhvienModel = $this->model('sinhvienModel');

            $sinhvienModel->insertSinhVien(
                $_POST['mssv'],
                $_POST['hoten'],
                $_POST['gioitinh'],
                $_POST['lophoc_id']
            );

            header('Location: /PNNM_68PM3_HoangDucViet_0028868/public/sinhvien/index');
            exit();
        }
    }

    public function edit($id)
    {
        $sinhvienModel = $this->model('sinhvienModel');
        $lophocModel = $this->model('lophocModel');

        $sinhvien = $sinhvienModel->getSinhVienById($id);
        $lophocs = $lophocModel->getAllLopHoc();

        $this->view('sinhvien/edit', [
            'sinhvien' => $sinhvien,
            'lophocs' => $lophocs
        ]);
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $sinhvienModel = $this->model('sinhvienModel');

            $sinhvienModel->updateSinhVien(
                $_POST['id'],
                $_POST['mssv'],
                $_POST['hoten'],
                $_POST['gioitinh'],
                $_POST['lophoc_id']
            );

            header('Location: /PNNM_68PM3_HoangDucViet_0028868/public/sinhvien/index');
            exit();
        }
    }

    public function delete($id)
    {
        $sinhvienModel = $this->model('sinhvienModel');
        $sinhvienModel->deleteSinhVien($id);

        header('Location: /PNNM_68PM3_HoangDucViet_0028868/public/sinhvien/index');
        exit();
    }
}
?>
