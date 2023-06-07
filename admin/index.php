<?php
include "../model/pdo.php";
include "../model/hangHoa.php";
include "../model/loaiHang.php";
include "../model/khachHang.php";
include "../model/binhLuan.php";
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
                
                $vaiTro = $_POST['vaiTro'];
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

        // hàng hóa
            //list hàng hóa
        case 'listHH':
            $danhsachHH = listHangHoa() ;
                include "hangHoa/list.php";
            break;

            //thêm hàng hóa
        case 'addHH':
            $danhsachlh = listLoaiHang() ;
            if(isset($_POST['btn-add'])) {
                $tenHangHoa = $_POST['tenHangHoa'];
                $donGia = $_POST['donGia'];
                $anh = $_FILES['anh']['name'];
                $ngayNhap = $_POST['ngayNhap'];
                $Loai = $_POST['tenLoai'];
                $moTa = $_POST['moTa'];
                $giamGia = $_POST['giamGia'];
                
                if(isset($_FILES)) {
                    $anh = $_FILES['anh']['name'];
                    move_uploaded_file($_FILES['anh']['tmp_name'], "img/$anh");
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
            }
            if(isset($_POST['btn-update'])&& $_POST['btn-update']) {
                $maHangHoa = (int)$_POST['maHangHoa'];
                $tenHangHoa = $_POST['tenHangHoa'];
                $donGia = $_POST['donGia'];
                $anh = $_FILES['anh']['name'];
                $ngayNhap = $_POST['ngayNhap'];
                $Loai = $_POST['tenLoai'];
                $moTa = $_POST['moTa'];
                $giamGia = $_POST['giamGia'];
                
                if(isset($_FILES)) {
                    $anh = $_FILES['anh']['name'];
                    move_uploaded_file($_FILES['anh']['tmp_name'], "img/$anh");
                }else{
                    $anh = $targetHH['anh'];
                }
                
                
                updateHangHoa($tenHangHoa, $donGia, $anh, $ngayNhap, $Loai, $moTa, $giamGia, $maHangHoa);
                header("location: index.php?act=listHH");
            }
            include "hangHoa/update.php";
            break;

            //xóa loại hàng
        case 'deleteHH':
            try {
                if(isset($_GET['id'])) {
                $id = $_GET['id'];
                deleteHangHoa($id);
                header("location: index.php?act=listHH");
                }
            } catch (Exception $e) {
            ?>
<script>
let err = function() {
    alert("Không thể xóa vì nó có liên kết khóa ngoại!")
}
err()
</script>
<?php
                }

            break;

        //Bình luận
            //danh sách bình luận
        case 'listCMT':
                $danhsachCMT = listBinhLuan();
                if(isset($_GET['btn'])) {
                    if($_GET['btn'] == "btn_desc") {
                         $danhsachCMT = listBinhLuan_desc();
                    }elseif($_GET['btn'] == "btn_HH") {
                        $danhsachCMT = listBinhLuan_HH();
                    }elseif($_GET['btn'] == "btn_KH") {
                        $danhsachCMT = listBinhLuan_KH();
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

        default:
            include "content.php";
            break;




    
    }
}else{
        include_once "content.php";
    }





include "footer.php";
?>