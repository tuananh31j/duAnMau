<?php
include "model/pdo.php";
include "model/hangHoa.php";
include "model/loaiHang.php";
include "model/khachHang.php";
include "header.php";





// controller
if(isset($_GET['act'])) {
    $act = $_GET['act'];

    switch ($act) {
        case 'addLH':
            
            if(isset($_POST['btn-add'])) {
                $sql = 'insert into loai(tenLoai) values(?)';
                $tenLoai = $_POST['tenLoai'];
                pdo_execute($sql, $tenLoai);
                $noti = "Thêm thành công!";
            }
            include "loaiHang/add.php";
            break;
        case 'listLH':
           
            $sql = "select * from loai";
            $danhsachlh = pdo_query($sql);
             include "loaiHang/list.php";
            break;
        case 'updateLH':
            
            if(isset($_GET['id'])) {
                $id = (int)$_GET['id'];
                $sql = "select * from loai where maLoai = $id";
                $targetLH = pdo_query_one($sql);
            }
            if(isset($_POST['btn-update'])&&$_POST['btn-update']) {
                $id = (int)$_POST['maLoai'];
                $tenLoaiMoi= $_POST['tenLoai'];
                $sql = "update loai set tenLoai = ? where maLoai = ?";
                pdo_execute($sql,$tenLoaiMoi, $id);
                $noti = 'cập nhật thành công!';
            }
            include "loaiHang/update.php";
            break;
        case 'reUpdateLH':
            
            include "loaiHang/update.php";
            break;
        default:
            include "content.php";
            break;
    }
}else{
        include_once "content.php";
    }





include "footer.php";
?>