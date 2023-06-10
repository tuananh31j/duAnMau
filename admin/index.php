<?php
include "../model/pdo.php";
include "../model/hangHoa.php";
include "../model/loaiHang.php";
include "../model/khachHang.php";
include "../model/binhLuan.php";
include "../global.php";
session_start();
include "header.php";





// controller
if(isset($_GET['act'])) {
    $act = $_GET['act'];

    switch ($act) {
        //Loại
            //thêm loại
        case 'addLH':
            if(isset($_POST['btn-add'])) {
                $tenLoai = $_POST['tenLoai'];
                addLoaiHang($tenLoai);
                $noti = "Thêm thành công!";
            }
            include "loaiHang/add.php";
            break;
            //danh sách loại hàng
        case 'listLH':
            $danhsachLH = listLoaiHang();

            if(isset($_GET['btn'])) {
                if($_GET['btn'] == "btn_DESC") {
                    $danhsachLH = listLoaiHang_DESC();
                }elseif($_GET['btn'] == "btn_ASC") {
                    $danhsachLH = listLoaiHang_ASC();
                }
                
               
            }
             include "loaiHang/list.php";
            break;
            //chỉnh sửa loại hàng
        case 'updateLH':
            
            if(isset($_GET['id'])) {
                $id = (int)$_GET['id'];
                $targetLH = selectLoaiHang_id($id);
            }
            if(isset($_POST['btn-update'])&&$_POST['btn-update']) {
                $id = (int)$_POST['maLoai'];
                $tenLoaiMoi= $_POST['tenLoai'];
                updateLoaiHang($tenLoaiMoi, $id);
                $noti = 'cập nhật thành công!';
            }
            include "loaiHang/update.php";
            break;

            //xóa loại hàng
        case 'deleteLH':
            try{
            if(isset($_POST['box']) && is_array($_POST['box'])) {
                        $checkedAll = $_POST['box'];

                        foreach($checkedAll as $checked) {
                            deleteLoaiHang($checked);
                        }
                    }
                    header("location: index.php?act=listLH");
            }catch(Exception $e) {
            $err = "Có liên lết khóa ngoại không thể xóa!";
            include "../err.php";
            header("location: ../err.php");
            }
            try{
                if(isset($_GET['id'])) {
                $id = $_GET['id'];
                deleteLoaiHang($id);
                }
                header("location: index.php?act=listLH");
            }catch(Exception $e) {
                $err = "Có liên lết khóa ngoại không thể xóa!";
                include "../err.php";
                header("location: ../err.php");
                }
            
            
            break;





        //khách hàng
        //thêm khách hàng
        case 'addKH':
            if(isset($_POST['btn-add'])) {
                $tenKhachHang = $_POST['tenKhachHang'];
                $matKhau = $_POST['matKhau'];
                $email = $_POST['email'];
                if(isset($_FILES) && $_FILES['anh']['name'] != '') {
                    $anh = $_FILES['anh']['name'];
                    move_uploaded_file($_FILES['anh']['tmp_name'], "../img/$anh");
                }else{
                    $anh = 'anhcuaban.png';
                }
                
                $vaiTro = $_POST['vaiTro'];
                addKhachHang_ad($tenKhachHang, $matKhau, $email, $anh, $vaiTro);
                $noti = "Thêm thành công!";
            }
            include "khachHang/add.php";
            break;
            //danh sách khách hàng
        case 'listKH':

            $danhsachKH = listKhachHang() ;
            if(isset($_GET['btn'])) {
                if($_GET['btn'] == "btn_DESC") {
                    $danhsachKH = listKhachHang_DESC();
                }elseif($_GET['btn'] == "btn_ASC") {
                    $danhsachKH = listKhachHang_ASC();
                }elseif($_GET['btn'] == "btn_member") {
                    $danhsachKH = listMember();
                }elseif($_GET['btn'] == "btn_admin") {
                    $danhsachKH = listAdmin();
                }
                
               
            }
                include "KhachHang/list.php";
            break;
            //xóa khách hàng
        case 'deleteKH':
        try{ 
            if(isset($_POST['box']) && is_array($_POST['box'])) {
                $checkedAll = $_POST['box'];

                foreach($checkedAll as $checked) {
                    deleteKhachHang($checked);
                }
            }
            header("location: index.php?act=listKH");
        }catch(Exception $e) {
        $err = "Có liên kết khóa ngoại không thể xóa!";
        include "../err.php";
        header("location: ../err.php");
        }
       try{
             if(isset($_GET['id'])) {
                
                $id = $_GET['id'];
                $KH= selectKhachHang_id($id);
                if($KH['vaiTro'] == 0) {
                    delete_cmt_KH($id);
                deleteKhachHang($id);
                } else{
                    $err ="Không thể xóa admin";
                    include "../err.php";
                    header("location: ../err.php");
                    break;
                }
                
                }
                header("location: index.php?act=listKH");
            }catch(Exception $e) {
            $err = "Có liên lết khóa ngoại không thể xóa!";
            include "../err.php";
            header("location: ../err.php");
            }
            break;
            //chỉnh sửa thông tin khách hàng
        case 'updateKH':
        
            if(isset($_GET['id'])) {
                $id = (int)$_GET['id'];
                $targetKH = selectKhachHang_id($id);
                $_SESSION['updateUser'] = selectKhachHang_id($id);
            }
            if(isset($_POST['btn-update'])&&$_POST['btn-update']) {
                $maKhachHang = (int)$_POST['maKhachHang'];
                $tenKhachHang= $_POST['tenKhachHang'];
                $matKhau= $_POST['matKhau'];
                $email= $_POST['email'];
                $kichHoat= $_POST['kichHoat'];
                $vaiTro= (int)$_POST['vaiTro'];
                if(isset($_FILES) && $_FILES['anh']['name'] != '') {
                    $anh= $_FILES['anh']['name'];
                    move_uploaded_file($_FILES['anh']['tmp_name'], "../img/$anh");
                }else{
                    $anh = $_SESSION['updateUser']['anh'];
                }
                
               
                updateUser_ad($tenKhachHang, $matKhau, $anh, $email,$kichHoat, $vaiTro, $maKhachHang);
                $noti = 'cập nhật thành công!';
            }
            include "khachHang/update.php";
            break;

        // hàng hóa
            //list hàng hóa
        case 'listHH':
            $danhsachHH = listHangHoa();
            if(isset($_GET['btn'])) {
                if($_GET['btn'] == "btn_DESC") {
                    $danhsachHH = listHangHoaMoiNhat_ad();
                }elseif($_GET['btn'] == "btn_ASC") {
                    $danhsachHH = listHangHoa_ASC();
                }elseif($_GET['btn'] == "btn_view_DESC") {
                    $danhsachHH = listHangHoa_view_DESC();
                }elseif($_GET['btn'] == "btn_price_DESC") {
                    $danhsachHH = listHangHoa_price_DESC();
                }
                
               
            }
                include "hangHoa/list.php";
            break;

            //thêm hàng hóa
        case 'addHH':
            $danhsachlh = listLoaiHang() ;
            if(isset($_POST['btn-add'])) {
                $tenHangHoa = $_POST['tenHangHoa'];
                $donGia = $_POST['donGia'];
               
                $ngayNhap = $_POST['ngayNhap'];
                $Loai = $_POST['tenLoai'];
                $moTa = $_POST['moTa'];
                $giamGia = $_POST['giamGia'];
                
                if(isset($_FILES)) {
                    $anh = $_FILES['anh']['name'];
                    move_uploaded_file($_FILES['anh']['tmp_name'], "../img/$anh");
                }else{
                    $anh = 'default.png';
                }
                
                
                addHangHoa($tenHangHoa, $donGia, $anh, $ngayNhap, $Loai, $moTa, $giamGia);
                $noti = "Thêm thành công!";
            }
            include "hangHoa/add.php";
            break;
                //chỉnh sửa thông tin hàng hóa
        case 'updateHH':
            $danhsachlh = listLoaiHang() ;
            if(isset($_GET['id'])) {
                $id = (int)$_GET['id'];
                $targetHH = list_hang_hoa_id($id);
                $_SESSION['pro'] = list_hang_hoa_id($id);
            }
            if(isset($_POST['btn-update'])&& $_POST['btn-update']) {
                $maHangHoa = (int)$_POST['maHangHoa'];
                $tenHangHoa = $_POST['tenHangHoa'];
                $donGia = $_POST['donGia'];
                
                $ngayNhap = $_POST['ngayNhap'];
                $Loai = $_POST['tenLoai'];
                $moTa = $_POST['moTa'];
                $giamGia = $_POST['giamGia'];
                
                if(isset($_FILES) && $_FILES['anh']['name'] != '') {
                    $anh = $_FILES['anh']['name'];
                    move_uploaded_file($_FILES['anh']['tmp_name'], "../img/$anh");
                }else{
                    $anh = $_SESSION['pro']['anh'];
                }
                
                
                updateHangHoa($tenHangHoa, $donGia, $anh, $ngayNhap, $Loai, $moTa, $giamGia, $maHangHoa);
                header("location: index.php?act=listHH");
            }
            include "hangHoa/update.php";
            break;

            //xóa loại hàng
        case 'deleteHH':
            try{
            if(isset($_POST['box']) && is_array($_POST['box'])) {
                    $checkedAll = $_POST['box'];

                    foreach($checkedAll as $checked) {
                        deleteHangHoa($checked);
                    }
                }
                header("location: index.php?act=listHH");
            }catch(Exception $e) {
            $err = "Có liên lết khóa ngoại không thể xóa!";
            include "../err.php";
            header("location: ../err.php");
            }
            
                
            try{
                if(isset($_GET['id'])) {
                $id = $_GET['id'];
                deleteHangHoa($id);
               
                }
                header("location: index.php?act=listHH");
            }catch(Exception $e) {
            $err = "Có liên lết khóa ngoại không thể xóa!";
            include "../err.php";
            header("location: ../err.php");
            }
                
            break;

        //Bình luận
                //thêm bình luận
        case 'addCMT':
            $danhsachHH = listHangHoa();
            if(isset($_POST['btn-add'])) {
                
                $maKhachHang = $_SESSION['user']['maKhachHang'];
                $maHangHoa = $_POST['maHangHoa'];
               
                $ngayBinhLuan = $_POST['ngayBinhLuan'];
                $noiDung = $_POST['noiDung'];
               
                addBinhLuan($maKhachHang, $maHangHoa, $ngayBinhLuan, $noiDung);
                $noti = "Thêm thành công!";
            }
            include "binhLuan/add.php";
            break;
            //danh sách bình luận
        case 'listCMT':
                $danhsachCMT = listBinhLuan();
                if(isset($_GET['btn'])) {
                    if($_GET['btn'] == "btn_DESC") {
                        $danhsachCMT = listBinhLuan_DESC();
                    }elseif($_GET['btn'] == "btn_ASC") {
                        $danhsachCMT = listBinhLuan_ASC();
                    }elseif($_GET['btn'] == "btn_KH") {
                        $danhsachCMT = listBinhLuan_KH();
                    }elseif($_GET['btn'] == "btn_HH") {
                        $danhsachCMT = listBinhLuan_HH();
                    }
                    
                   
                }
            include "binhLuan/list.php";
            break;
            //Xóa bình luân
        case 'deleteCMT':
            
                if(isset($_GET['id'])) {
                    $id = $_GET['id'];
                    delete_cmt($id);
                    }

                if(isset($_POST['box']) && is_array($_POST['box'])) {
                    $checkedAll = $_POST['box'];

                    foreach($checkedAll as $checked) {
                        delete_cmt($checked);
                    }
                }
           
                header("location: index.php?act=listCMT");
                
                break;
        case 'thongKe':
            if(isset($_GET['name'])) {
                $name=$_GET['name'];
                //thông kê loại hàng
                if($name == 'LH') {
                    $danhsachTKLH = list_thongKe_LH();
                    include "thongKe/loaiHang.php";
                //thống kê hàng hoa
                }elseif($name == 'HH') {
                    $danhsachTKHH = list_thongKe_HH();
                    include "thongKe/hangHoa.php";
                }
            }
            
            
            
            break;     
        case 'chartLH':
            $danhsachTKLH = list_thongKe_LH();
            include "thongKe/chartLH.php";
            
            break;
        
            case 'chartHH':
                $danhsachTKHH = list_thongKe_HH();
                include "thongKe/chartHH.php";
                
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