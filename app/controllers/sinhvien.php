<?php
require_once '../app/core/Controller.php';

class sinhvien extends Controller {

    public function index()
    {
        $sinhvienModel = $this->model('sinhvienModel');
        $sinhviens = $sinhvienModel->getAllSinhVien();

        $this->view('sinhvien/index', [
            'sinhviens' => $sinhviens
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
