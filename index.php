<?php
session_start();
include "model/pdo.php";
include "model/hangHoa.php";
include "model/loaiHang.php";
include "model/khachHang.php";
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
            $dataLH= listLoaiHang();
            $targetSP = list_hang_hoa();

            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                $targetSP = list_hang_hoa_loai($id);
            }
            
            include "view/listLH/listLH.php";
            break;

        // Trang chi tiết sản phẩm
        case 'detailsSP':
            $dataLH= listLoaiHang();
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                
                $targetSP = list_hang_hoa_loai($id);
                $targetSP_id = list_hang_hoa_id($id);
            }
            include "view/productDetails/details.php";
            break;
        
        // Trang đăng ký tài khoản
        case 'dangKy':
            if(isset($_POST['btn-dk'])) {
                $email= $_POST['email'];
                $tenKhachHang= $_POST['tenKhachHang'];
                $matKhau= $_POST['matKhau'];
                addKhachHang($email,$tenKhachHang,$matKhau);

                $thongbao = 'Đăng ký thành công';
            }
            include 'view/account/dangKy.php';
            break;
            
        // Trang đăng nhập tài khoản
        case 'dangNhap':
            if(isset($_POST['btn-dN'])) {
               
                $tenKhachHang= $_POST['tenKhachHang'];
                $matKhau= $_POST['matKhau'];
                $checkDN =  checkUser($tenKhachHang,$matKhau);
                if(is_array($checkDN)) {
                    $_SESSION['user'] = $checkDN;
                    header("location: index.php");
                    $thongbao = 'Đăng ký thành công';
                }
            }
            include 'view/account/dangKy.php';
            break;
        
        //Trang đăng xuất
        case 'dangXuat':  
                include 'view/account/dangXuat.php';
                header("location: index.php");
                break;
            
        //trang chỉnh sửa thông tin người dùng
        case 'userUpdate':
                if(isset($_POST['btn-userUpdate'])) {
                    $maKhachHang = $_SESSION['user']['maKhachHang'];
                    $tenKhachHang = $_POST['tenKhachHang'];
                    $matKhau = $_POST['matKhau'];
                    $anh = $_FILES['anh']['name'];
                    $email = $_POST['email'];
                    move_uploaded_file($_FILES['anh']['tmp_name'], "img/$anh");
                    $_SESSION['user']['anh'] = $anh;
                    updateUser($tenKhachHang, $matKhau, $anh, $email, $maKhachHang);
                    header("location: index.php");
                }
                include 'view/account/userUpdate.php';
                
                break;
                case 'forgotPass':
                    if(isset($_POST['btn-userUpdate'])) {
                        $maKhachHang = $_SESSION['user']['maKhachHang'];
                        $tenKhachHang = $_POST['tenKhachHang'];
                        $matKhau = $_POST['matKhau'];
                        $anh = $_FILES['anh']['name'];
                        $email = $_POST['email'];
                        move_uploaded_file($_FILES['anh']['tmp_name'], "img/$anh");
                        $_SESSION['user']['anh'] = $anh;
                        updateUser($tenKhachHang, $matKhau, $anh, $email, $maKhachHang);
                        header("location: index.php");
                    }
                    include 'view/account/userUpdate.php';
                    
                    break;  
    }
}else{
    
    $newProduct = listHangHoaMoiNhat();
    $dataLH = listLoaiHang();
    include "view/home.php";
}


include "view/footer.php";

?>