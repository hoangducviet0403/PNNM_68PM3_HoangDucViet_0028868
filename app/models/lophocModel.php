<?php

require_once '../app/core/Database.php';

class lophocModel
{
    private $conn;

    public function __construct()
    {
        $this->conn = ConnectDB::connect();
    }

    public function getAllLopHoc()
    {
        $sql = "SELECT * FROM lophoc";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getLopHocById($id)
    {
        $sql = "SELECT * FROM lophoc WHERE id = :id";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([
            ':id' => $id
        ]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function insertLopHoc($malop, $tenlop)
    {
        $sql = "INSERT INTO lophoc(malop, tenlop)
                VALUES(:malop, :tenlop)";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            ':malop' => $malop,
            ':tenlop' => $tenlop
        ]);
    }

    public function updateLopHoc($id, $malop, $tenlop)
    {
        $sql = "UPDATE lophoc
                SET malop = :malop,
                    tenlop = :tenlop
                WHERE id = :id";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            ':id' => $id,
            ':malop' => $malop,
            ':tenlop' => $tenlop
        ]);
    }

    public function deleteLopHoc($id)
    {
        $sql = "DELETE FROM lophoc WHERE id = :id";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            ':id' => $id
        ]);
    }
}