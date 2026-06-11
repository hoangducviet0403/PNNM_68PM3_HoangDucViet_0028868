<?php
require_once '../app/core/Controller.php';

class sinhvien extends Controller {

    public function index()
    {
        $sinhvienModel = $this->model('sinhvienModel');

        $limit = 5;

        $page = $_GET['page'] ?? 1;
        $page = (int)$page;

        if ($page < 1) {
            $page = 1;
        }

        $offset = ($page - 1) * $limit;

        $totalSinhVien = $sinhvienModel->countSinhVien();
        $totalPage = ceil($totalSinhVien / $limit);

        $sinhviens = $sinhvienModel->getSinhVienPaging($limit, $offset);

        $this->view('sinhvien/index', [
            'sinhviens' => $sinhviens,
            'page' => $page,
            'totalPage' => $totalPage
        ]);
    }
    
    public function create()
    {
        $this->view('sinhvien/create');
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $hoten = $_POST['hoten'] ?? '';
            $gioitinh = $_POST['gioitinh'] ?? '';
            $mssv = $_POST['mssv'] ?? '';

            $sinhvienModel = $this->model('sinhvienModel');
            $sinhvienModel->insertSinhVien($hoten, $gioitinh, $mssv);

            header('Location: /PNNM_68PM3_HoangDucViet_0028868/public/sinhvien/index');
            exit();
        }
    }
}
?>
