<?php
session_start();
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

                $sql = 'select * from khachHang where tenKhachHang =? and matKhau = ?';

                $checkDN =  pdo_query_one($sql,$tenKhachHang,$matKhau);
                if(is_array($checkDN)) {
                    $_SESSION['user'] = $checkDN;
                    header("location: index.php");
                    $thongbao = 'Đăng ký thành công';
                }

                
            
                
            }
            
            include 'view/account/dangKy.php';
            break;
            case 'dangXuat':
                
                include 'view/account/dangXuat.php';
                header("location: index.php");
                break;
            
            case 'userUpdate':
                if(isset($_POST['btn-userUpdate'])) {
                    $maKhachHang = $_SESSION['user']['maKhachHang'];
                    $tenKhachHang = $_POST['tenKhachHang'];
                    $matKhau = $_POST['matKhau'];
                    $anh = $_FILES['anh']['name'];
                    $email = $_POST['email'];
                    move_uploaded_file($_FILES['anh']['tmp_name'], "img/$anh");
                    $_SESSION['user']['anh'] = $anh;

                    $sql = "update khachHang set tenKhachHang = ?, matKhau = ?, anh = ?, email = ? where maKhachHang = ?";
                    pdo_execute($sql, $tenKhachHang, $matKhau, $anh, $email, $maKhachHang);
                    header("location: index.php");
                }
            
                include 'view/account/userUpdate.php';
                
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