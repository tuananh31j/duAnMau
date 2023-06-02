<?php
include "../model/pdo.php";
include "header.php";
include "../model/hanghoa.php";
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
        case 'listhh':
            $listhanghoa = loadall_hanghoa();
            include "hanghoa/list.php";
            break;
        case 'addhh':
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $tenHangHoa = $_POST['tenHangHoa'];
                insert_hanghoa($tenHangHoa);
                $thongba0 = "Thêm Thành Công";
            }
            include "hanghoa/add.php";
            break;
        case "xoahh" :
            if(isset($_GET['maHangHoa']) && ($_GET['maHangHoa']>0)){
                delete_hanghoa($_GET['maHangHoa']);
            }
            $listhanghoa = loadall_hanghoa();
            include "hanghoa/list.php";
            break;

        case "suahh":
            if(isset($_GET['maHangHoa']) && ($_GET['maHangHoa']>0)){
                $hh=loadone_hanghoa($_GET['maHangHoa']);
            }
            include "hanghoa/list.php";
            break;
        case "updatehh":
            if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                $tenHangHoa=$_POST['tenHangHoa'];
                $maHangHoa = $_POST['maHangHoa'];
                update_hanghoa($maHangHoa,$tenHangHoa);
                $thongbao = "Cập Nhật Thành Công";
            }
            $listhanghoa = loadall_hanghoa();
            include "hanghoa/list.php";
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