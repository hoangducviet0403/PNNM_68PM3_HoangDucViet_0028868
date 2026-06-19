<?php
require_once '../app/core/Database.php';

class sinhvienModel
{
    private $conn;

    public function __construct()
    {
        $this->conn = ConnectDB::connect();
    }

    public function getSinhVienPaging($limit, $offset, $keyword = '', $lophoc_id = '')
    {
        $sql = "SELECT sinhvien.*, lophoc.malop, lophoc.tenlop
                FROM sinhvien
                JOIN lophoc ON sinhvien.lophoc_id = lophoc.id
                WHERE 1";

        if ($keyword != '') {
            $sql .= " AND (sinhvien.hoten LIKE :keyword OR sinhvien.mssv LIKE :keyword)";
        }

        if ($lophoc_id != '') {
            $sql .= " AND sinhvien.lophoc_id = :lophoc_id";
        }

        $sql .= " LIMIT :limit OFFSET :offset";

        $stmt = $this->conn->prepare($sql);

        if ($keyword != '') {
            $stmt->bindValue(':keyword', '%' . $keyword . '%');
        }

        if ($lophoc_id != '') {
            $stmt->bindValue(':lophoc_id', $lophoc_id, PDO::PARAM_INT);
        }

        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function countSinhVien($keyword = '', $lophoc_id = '')
    {
        $sql = "SELECT COUNT(*) AS total
                FROM sinhvien
                WHERE 1";

        if ($keyword != '') {
            $sql .= " AND (hoten LIKE :keyword OR mssv LIKE :keyword)";
        }

        if ($lophoc_id != '') {
            $sql .= " AND lophoc_id = :lophoc_id";
        }

        $stmt = $this->conn->prepare($sql);

        if ($keyword != '') {
            $stmt->bindValue(':keyword', '%' . $keyword . '%');
        }

        if ($lophoc_id != '') {
            $stmt->bindValue(':lophoc_id', $lophoc_id, PDO::PARAM_INT);
        }

        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result['total'];
    }

    public function insertSinhVien($mssv, $hoten, $gioitinh, $lophoc_id)
    {
        $sql = "INSERT INTO sinhvien(hoten, gioitinh, mssv, lophoc_id)
                VALUES (:hoten, :gioitinh, :mssv, :lophoc_id)";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            ':mssv' => $mssv,
            ':hoten' => $hoten,
            ':gioitinh' => $gioitinh,
            ':lophoc_id' => $lophoc_id
        ]);
    }

    public function getSinhVienById($id)
    {
        $sql = "SELECT * FROM sinhvien WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':id' => $id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateSinhVien($id, $mssv, $hoten, $gioitinh, $lophoc_id)
    {
        $sql = "UPDATE sinhvien
                SET hoten = :hoten,
                    gioitinh = :gioitinh,
                    mssv = :mssv,
                    lophoc_id = :lophoc_id
                WHERE id = :id";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            ':id' => $id,
            ':hoten' => $hoten,
            ':gioitinh' => $gioitinh,
            ':mssv' => $mssv,
            ':lophoc_id' => $lophoc_id
        ]);
    }

    public function deleteSinhVien($id)
    {
        $sql = "DELETE FROM sinhvien WHERE id = :id";
        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([':id' => $id]);
    }
}
?>
