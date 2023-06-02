<?php
include "model/pdo.php";

include "view/header.php";



if(isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        // Trang thôn tin
        case 'about':
            include "view/aboutUs/aboutUs.php";
            break;

        // trang liên hệ
        case 'contact':
            include "view/contact/contact.php";
            break;
        case 'listLH':
            $sqlLH = "select * from loai";
            $sqlSP = "select * from hangHoa";
            $dataLH = pdo_query($sqlLH);
            $targetSP = pdo_query($sqlSP);

            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                $sql = "select * from hangHoa where maLoai = ?";
                $targetSP = pdo_query($sql, $id);
            }
            
            include "view/listLH/listLH.php";
            break;

        // Trang chi tiết sản phẩm
        case 'detailsSP':
            $sqlLH = "select * from loai";
            
            $dataLH = pdo_query($sqlLH);
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                $sql = "select * from hangHoa where maHangHoa = ?";
                $sqls = "select * from hangHoa where maLoai = ?";
                $targetSP = pdo_query($sqls, $id);
                $targetSP_id = pdo_query_one($sql, $id);
            }
            include "view/productDetails/details.php";
            break;
        
        // Trang đăng ký tài khoản
        case 'dangKy':
            if(isset($_POST['btn-dk'])) {
                $email= $_POST['email'];
                $tenKhachHang= $_POST['tenKhachHang'];
                $matKhau= $_POST['matKhau'];

                $sql = 'insert into khachHang(email, tenKhachhang, matKhau) values(?, ?, ?)';

                pdo_execute($sql,$email,$tenKhachHang,$matKhau);

                $thongbao = 'Đăng ký thành công';
            
                
            }
            
            include 'view/account/dangKy.php';
            break;
            // Trang đăng nhập tài khoản
        case 'dangNhap':
            if(isset($_POST['btn-dN'])) {
               
                $tenKhachHang= $_POST['tenKhachHang'];
                $matKhau= $_POST['matKhau'];

                $sql = 'insert into khachHang(email, tenKhachhang, matKhau) values(?, ?, ?)';

                pdo_execute($sql,$email,$tenKhachHang,$matKhau);

                $thongbao = 'Đăng ký thành công';
            
                
            }
            
            include 'view/account/dangKy.php';
            break;
            
    }
}else{
    $sql = "select * from hangHoa order by maHangHoa desc";
    $newProduct = pdo_query($sql);
    $sqlLH = "select * from loai";
    
    $dataLH = pdo_query($sqlLH);
    include "view/home.php";
}


include "view/footer.php";

?>