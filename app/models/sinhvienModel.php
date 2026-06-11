<?php
require_once '../app/core/Database.php';

class sinhvienModel {
    private $conn;

    public function __construct() {
        $this->conn = ConnectDB::connect();
    }

    public function getAllSinhVien() {
        $query = "SELECT * FROM sinhvien";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertSinhVien($mssv, $hoten, $gioitinh)
    {
        $sql = "INSERT INTO sinhvien(mssv, hoten, gioitinh)
                VALUES (:mssv, :hoten, :gioitinh)";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            ':mssv' => $mssv,
            ':hoten' => $hoten,
            ':gioitinh' => $gioitinh
        ]);
    }
}
?>
