<?php
include "../model/pdo.php";
include "header.php";





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
        
        default:
            include "content.php";
            break;
    }
}else{
        include_once "content.php";
    }





include "footer.php";
?>