<?php
include "../model/pdo.php";
include "../model/hangHoa.php";
include "../model/loaiHang.php";
include "../model/khachHang.php";
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
            $danhsachlh = listLoaiHang() ;
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
            try {
                if(isset($_GET['id'])) {
                $id = $_GET['id'];
                deleteLoaiHang($id);
                }
            } catch (Exception $e) {
                echo 'Không thể xóa dòng này vì nó là liên kế khóa ngoại của hàng hóa ';
            }
            header("location: index.php?act=listLH");
            
            break;





        //khách hàng
        //thêm khách hàng
        case 'addKH':
            if(isset($_POST['btn-add'])) {
                $tenKhachHang = $_POST['tenKhachHang'];
                $matKhau = $_POST['matKhau'];
                $email = $_POST['email'];
                if(isset($_FILES)) {
                    $anh = $_FILES['anh']['name'];
                    move_uploaded_file($_FILES['anh']['tmp_name'], "img/$anh");
                }else{
                    $anh = 'anhcuaban.png';
                }
                
                $vaiTro = $_POST['tenLoai'];
                addKhachHang($tenKhachHang, $matKhau, $email, $anh, $vaiTro  );
                $noti = "Thêm thành công!";
            }
            include "khachHang/add.php";
            break;
            //danh sách khách hàng
        case 'listKH':
            $danhsachKH = listKhachHang() ;
                include "KhachHang/list.php";
            break;
            //xóa khách hàng
        case 'deleteKH':
         try{
             if(isset($_GET['id'])) {
                $id = $_GET['id'];
                deleteKhachHang($id);
                }
         }catch(Exception $e){
            echo 'thong bao!!!!!!!!!';
         }
            header("location: index.php?act=listKH");
            
            break;
            //chỉnh sửa thông tin khách hàng
        case 'updateKH':
        
            if(isset($_GET['id'])) {
                $id = (int)$_GET['id'];
                $targetKH = selectKhachHang_id($id);
            }
            if(isset($_POST['btn-update'])&&$_POST['btn-update']) {
                $maKhachHang = (int)$_POST['maKhachHang'];
                $tenKhachHang= $_POST['tenKhachHang'];
                $maKhau= $_POST['maKhau'];
                $email= $_POST['email'];
                if(isset($_FILES)) {
                    $anh= $_FILES['anh']['name'];
                    move_uploaded_file($_FILES['anh']['tmp_name'], "img/$anh");
                }else{
                    $anh = $targetKH['anh'];
                }
                
                $kichHoat= $_POST['kichHoat'];
                $vaiTro= $_POST['vaiTro'];
                updateUser_ad($tenKhachHang, $matKhau, $anh, $email,$kichHoat, $vaiTro, $maKhachHang);
                $noti = 'cập nhật thành công!';
            }
            include "khachHang/update.php";
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