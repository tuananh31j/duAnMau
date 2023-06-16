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
                
                
                $targetSP_id = list_hang_hoa_id($id);
                $targetSP_loai = list_hang_hoa_loai($targetSP_id['maLoai']);
                if(isset($_GET['luotXem']) && $_GET['luotXem'] > 0) {
                    $luotXem = $_GET['luotXem'];
                    luotXem($id,$luotXem);
                }
            }
            
            include "view/productDetails/details.php";
            break;
        
        // Trang đăng ký tài khoản
        case 'dangKy':
            $err = [];
            $user = [];
            
            if(isset($_POST['btn-dk'])) {
                $user['email'] = isset($_POST['email'])?$_POST['email']:'';
                $user['tenKhachHang'] = isset($_POST['tenKhachHang'])?$_POST['tenKhachHang']:'';
                $user['matKhau'] = isset($_POST['matKhau'])?$_POST['matKhau']:'';

                $checkEmail =  checkEmail($user['email']);
                if($user['email'] == '') {
                    $err['email'] = 'Chưa nhập email!';
                }
                elseif(isset($checkEmail) && is_array($checkEmail)) {
                    $err['email'] = "Email đã tồn tại!";
                }
                if($user['tenKhachHang'] == '') {
                    $err['tenKhachHang'] = 'Chưa nhập tenKhachHang!';
                }
                if($user['matKhau'] == '') {
                    $err['matKhau'] = 'Chưa nhập matKhau!';
                }else{
                addKhachHang($user['email'],$user["tenKhachHang"],$user["matKhau"]);
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
                    if(isset($anh) && $anh!= ''){
                        move_uploaded_file($_FILES['anh']['tmp_name'], "img/$anh");
                        $_SESSION['user']['anh'] = $anh;
                    }else{
                        $anh = $_SESSION['user']['anh'];
                    }
                    if($tenKhachHang == ''|| $email == ''|| $matKhau == '') {
                        $noti = 'Không được để trống!';
                    }else{
                       $_SESSION['user']['tenKhachHang'] = $tenKhachHang;
                    $_SESSION['user']['email'] = $email;
                    $_SESSION['user']['matKhau'] = $matKhau;
                   
                    updateUser($tenKhachHang, $matKhau, $anh, $email, $maKhachHang);
                    header("location: index.php"); 
                    }
                    
                }
                include 'view/account/userUpdate.php';
                
                break;

        //Trang quên mật khẩu
        case 'forgotPass':
            $err = [];
            $user = [];
            if(isset($_POST['btn-getPass'])) {
                $user['email'] = isset($_POST['email'])?$_POST['email']:'';
                $user['tenKhachHang'] = isset($_POST['tenKhachHang'])?$_POST['tenKhachHang']:'';
                if($user['email'] == '') {
                    $err['email'] = "Chứa nhập địa chỉ email!";
                }if($user['tenKhachHang'] == '') {
                    $err['tenKhachHang'] = 'Chưa điền tên khách hàng!';
                }else{
                    $email =  $user['email'];
                    $tenKhachHang = $user['tenKhachHang'];
                    $targetKH = getPass($tenKhachHang,$email);
                    if(is_array($targetKH)) {
                        $yourPass = $targetKH['matKhau'];
                        
                    }else{
                        $yourPass = "Thông tin không hợp lệ";
                    }
                   
                }
            }
            include 'view/account/forgotPass.php';
            
            break;  


    
    

    }
}else{
    $err = [];
    if(isset($_POST['btn-dN']) ) {
               
        $email= $_POST['email'];
        $matKhau= $_POST['matKhau'];
        if($email == '') {
            $err['email'] = "Không được để trống!";
        }
        if($matKhau == '') {
            $err['matKhau'] = "Không được để trống!";
        }else{
             $checkDN =  checkUser($email,$matKhau);
        if(is_array($checkDN)) {
            $_SESSION['user'] = $checkDN;
            
            $noti = 'Đăng nhập thành công';
        }else{
        $noti = "Thông tin sai!";
        }
        }
       
    }
    $top10LuotXem = top10LuotXem();
    $newProduct = listHangHoaMoiNhat();
    $dataLH = listLoaiHang();
    include "view/home.php";
}


include "view/footer.php";

?>