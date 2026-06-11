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

    public function getSinhVienPaging($limit, $offset)
    {
        $sql = "SELECT * FROM sinhvien LIMIT :limit OFFSET :offset";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function countSinhVien()
    {
        $sql = "SELECT COUNT(*) AS total FROM sinhvien";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result['total'];
    }

    public function getSinhVienByMssv($mssv)
    {
        $sql = "SELECT * FROM sinhvien WHERE mssv = :mssv";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':mssv' => $mssv
        ]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateSinhVien($mssv, $hoten, $gioitinh)
    {
        $sql = "UPDATE sinhvien 
                SET hoten = :hoten, gioitinh = :gioitinh 
                WHERE mssv = :mssv";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            ':mssv' => $mssv,
            ':hoten' => $hoten,
            ':gioitinh' => $gioitinh
        ]);
    }

    public function deleteSinhVien($mssv)
    {
        $sql = "DELETE FROM sinhvien WHERE mssv = :mssv";
        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            ':mssv' => $mssv
        ]);
    }
}
?>
