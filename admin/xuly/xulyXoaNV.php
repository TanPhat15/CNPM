<?php
include '../../db/dbconnect.php';
if (isset($_GET['idnd'])) {

    $idnd = $_GET['idnd'];
    $idtk = $_GET['idtk'];
    session_start();
    if ($_SESSION['MaTaiKhoan'] != $_GET['idtk']) {
        $sql = 'UPDATE nhanvien SET TrangThai=0 WHERE MaNhanVien = "' . $idnd . '"';
        $result = $conn->query($sql);
        if ($result) {
            $sql = 'UPDATE taikhoan SET TrangThai=0 WHERE MaTaiKhoan = "' . $idtk . '"';
            $result = $conn->query($sql);
            if ($result) {
                echo "<script>
            alert('Xóa Thành Công');
            window.location = '../index.php?id=nd'
            </script>";
                $conn->close();
                return;
            }
        }
        echo "<script>
    alert('Xóa không Thành Công');
    window.location = '../index.php?id=nd'
    </script>";
        $conn->close();
        return;
    } else {
        echo "<script>
    alert('Tài khoản của bạn đang sử dụng không thể xóa !');
    window.location = '../index.php?id=nd'
    </script>";
        $conn->close();
        return;
    }
}
