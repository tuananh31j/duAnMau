<?php
include "../model/pdo.php";
include "header.php";
include "../model/khachhang.php";
include "../model/binhluan.php";






// controller
if(isset($_GET['act'])) {
    $act = $_GET['act'];

    switch ($act) {
        case 'addlh':
            include "loaiHang/add.php";
            if(isset($_POST['btn-them']) && $_POST['btn-them']) {
                $sql = 'insert into loai(tenLoai) values(?)';
                $tenLoai = $_POST['tenLoai'];
                pdo_execute($sql, $tenLoai);
            }
            break;
        case 'addhp':
            include "loaiHang/add.php";
            if(isset($_POST['btn-them']) && $_POST['btn-them']) {
                $sql = 'insert into loai(tenLoai) values(?)';
                $tenLoai = $_POST['tenLoai'];
                pdo_execute($sql, $tenLoai);   
            }
            break;
        
            case 'dskh':
                include "khachhang/list.php"; 
                $listkhachhang = loadall_khachhang();
                break;

            case 'dsbl':
                include "binhluan/list.php"; 
                $listbinhluan=loadall_binhluan(0);
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