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
            $tenHangHoa = $_POST['tenhh'];
            $donGia = $_POST['dongia'];
            $giamGia = $_POST['giamgia'];
            $ngayNhap = $_POST['ngaynhap'];
            $maLoai = $_POST['maloai'];
            $soLuotXem = $_POST['soluotxem'];
            $moTa = $_POST['mota'];
            $filename = $_FILES['anh']['name'];
            $anh = "upload/";

            insert_hanghoa($tenHangHoa,$donGia,$giamGia,$anh,$ngayNhap,$maLoai,$soLuotXem,$moTa);
            $thongbao = "Thêm Thành Công";
        }
        include "hanghoa/add.php";
        break;
                
        case "xoahh" :
            if(isset($_GET['maHangHoa']) && ($_GET['maHangHoa']>0)){
                delete_hanghoa($_GET['maHangHoa']);
            }
            $listhanghoa = loadall_hanghoa("",0);
            include "hanghoa/list.php";
            break;

        case "suahh":
            if(isset($_GET['maHangHoa']) && ($_GET['maHangHoa']>0)){
                $dm=loadone_hanghoa($_GET['maHangHoa']);
            }
            include "hanghoa/list.php";
            break;
        case "updatehh":
            if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                $tenHangHoa=$_POST['tenHangHoa'];
                $maHangHoa = $_POST['maHangHoa'];
                $giamGia = $_POST['giamgia'];
                $ngayNhap = $_POST['ngaynhap'];
                $maLoai = $_POST['maloai'];
                $soLuotXem = $_POST['soluotxem'];
                $moTa = $_POST['mota'];
                $filename = $_FILES['anh']['name'];
                $anh = "..upload/";
                $file = $anh . basename($_FILES["anh"]["name"]);
                move_uploaded_file($_FILES["anh"]["tmp_name"], $file);
                update_hanghoa($maHangHoa,$tenHangHoa,$donGia,$giamGia,$anh,$ngayNhap,$maLoai,$soLuotXem,$moTa);
                $thongbao = "Cập Nhật Thành Công";
            }
            $listhanghoa = loadall_hanghoa();
            include "hanghoa/list.php";
            break;
        case 'dskh':
                include "khachhang/list.php"; 
                $listkhachhang = loadall_khachhang();
                break;
        case 'addkh':
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){  
                $tenKhachHang = $_POST['tenkh'];
                $matKhau = $_POST['mk'];
                $email = $_POST['email'];
                $diaChi = $_POST['diachi'];
                $vaiTro = $_POST['vaitro'];

                insert_khachhang($tenKhachHang,$matKhau,$email,$diaChi,$vaiTro);
                $thongbao = "Thêm Thành Công";
            }
            include "khachhang/add.php";
            break;
        case "suatk":
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                $tenKhachHang = $_POST['tenkh'];
                $matKhau = $_POST['mk'];
                $email = $_POST['email'];
                $diaChi = $_POST['diachi'];
                $vaiTro = $_POST['vaitro'];
                    update_khachhang($maKhachHang,$tenKhachHang,$matKhau,$email,$diaChi,$vaiTro);
                    $thongbao = "Cập Nhật Thành Công";
                }
                $listkhachhang = loadall_khachhang();
                include "khachhang/list.php";
                break;

        case 'xoatk':
                if(isset($_GET['maKhachHang']) && ($_GET['maKhachHang']>0)){
                        delete_binhluan($_GET['maKhachHang']);
                }
                $listkhachhang = loadall_khachhang("",0);
                include "khachhang/list.php";
                break;
            
        case 'dsbl':
                include "binhluan/list.php"; 
                $listbinhluan=loadall_binhluan(0);
                break;
        case 'xoabl':
            if(isset($_GET['maBinhLuan']) && ($_GET['maBinhLuan']>0)){
                delete_binhluan($_GET['maBinhLuan']);
            }
            $listbinhluan = loadall_binhluan("",0);
            include "binhluan/list.php";
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