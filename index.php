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

        //trang sản phẩm và tìm kiếm sản phẩm
        case 'product':
            $dataLH= listLoaiHang();
            $targetSP = listHangHoaMoiNhat();
            if(isset($_POST['kw']) && $_POST['kw'] != '') {
                $kw = $_POST['kw'];
                $targetSP =  list_hang_hoa_name($kw) ;
            }
           if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $targetSP =  list_hang_hoa_loai($id);
            $targetLH = selectLoaiHang_id($id);
           }
            include "view/product/listProduct.php";
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
                    if(isset($anh) && $anh!= ''){
                        move_uploaded_file($_FILES['anh']['tmp_name'], "img/$anh");
                        $_SESSION['user']['anh'] = $anh;
                    }else{
                        $anh = $_SESSION['user']['anh'];
                    }
                    $_SESSION['user']['tenKhachHang'] = $tenKhachHang;
                    $_SESSION['user']['email'] = $email;
                    $_SESSION['user']['matKhau'] = $matKhau;
                   
                    updateUser($tenKhachHang, $matKhau, $anh, $email, $maKhachHang);
                    header("location: index.php");
                }
                include 'view/account/userUpdate.php';
                
                break;

        //Trang quên mật khẩu
        case 'forgotPass':
            if(isset($_POST['btn-getPass'])) {
                
                $tenKhachHang = $_POST['tenKhachHang'];
               
                
                $email = $_POST['email'];
                $targetKH = getPass($tenKhachHang,$email);
               
                if(is_array($targetKH)) {
                    $yourPass = $targetKH['matKhau'];
                    
                }else{
                    $yourPass = "Thông tin không hợp lệ";
                }
                
               
            }
            include 'view/account/forgotPass.php';
            
            break;  


    
    

    }
}else{
    if(isset($_POST['btn-dN']) ) {
               
        $email= $_POST['email'];
        $matKhau= $_POST['matKhau'];
        $checkDN =  checkUser($email,$matKhau);
        if(is_array($checkDN)) {
            $_SESSION['user'] = $checkDN;
            
            $noti = 'Đăng nhập thành công';
        }else{
        $noti = "Thông tin sai!";
        }
    }
   
    $newProduct = listHangHoaMoiNhat();
    $dataLH = listLoaiHang();
    include "view/home.php";
}


include "view/footer.php";

?>