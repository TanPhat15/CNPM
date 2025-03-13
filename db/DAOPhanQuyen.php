<?php
include_once("DataBaseConfig.php");
class DAOPhanQuyen extends DatabaseConfig
{

    public function checkQuyen($MaQuyen, $MaChiTiet)
    {
        $sql = "SELECT * FROM phanquyen WHERE MaQuyen = '" . $MaQuyen . "' AND MaChiTiet = '" . $MaChiTiet . "'";
        if ($result = mysqli_query($this->conn, $sql)) {
            if ($result->num_rows != 0) {
                return true;
            }
        }
        return false;
    }


    public function getListCTQ()
    {
        $sql = "SELECT * FROM chitietquyen";
        $data = null;
        if ($result = mysqli_query($this->conn, $sql)) {
            while ($row = mysqli_fetch_array($result)) {
                $data[] = $row;
            }
            mysqli_free_result($result);
        }
        return $data;
    }


    public function delete($MaQuyen)
    {
        $sql = "DELETE FROM phanquyen WHERE MaQuyen = '" . $MaQuyen . "'";
        if ($result = mysqli_query($this->conn, $sql)) {
            return true;
        }
        return false;
    }

    public function insert($MaQuyen, $MaChiTiet)
    {
        $sql = "INSERT INTO phanquyen (MaQuyen,MaChiTiet) VALUES ('$MaQuyen', '$MaChiTiet')";
        if ($result = mysqli_query($this->conn, $sql)) {
            return true;
        }
        return false;
    }

    public function getQuyen($MaQuyen)
    {
        $sql = "SELECT * FROM phanquyen,chitietquyen WHERE MaQuyen = '" . $MaQuyen . "' AND chitietquyen.MaChiTiet = phanquyen.MaChiTiet";
        $data = null;
        if ($result = mysqli_query($this->conn, $sql)) {
            while ($row = mysqli_fetch_array($result)) {
                $data[] = $row;
            }
            mysqli_free_result($result);
        }
        return $data;
    }

    public function hasDuyetPN($maQuyen)
    {
        $sql = "SELECT * FROM phanquyen WHERE MaChiTiet = 'd' AND MaQuyen = '" . $maQuyen . "'";
        $data = null;
        if ($result = mysqli_query($this->conn, $sql)) {
            while ($row = mysqli_fetch_array($result)) {
                $data[] = $row;
            }
            mysqli_free_result($result);
        }
        if ($data == null) {
            return false;
        } else {
            return true;
        }
    }
}
