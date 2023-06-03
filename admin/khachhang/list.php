<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH TÀI KHOẢN</h1>
    </div>
    <div class="row frmcontent">
        <div class="row frmkh">
            <table border="1">
                <tr>
                    <th></th>
                    <th>MÃ TÀI KHOẢN</th>
                    <th>TÊN ĐĂNG NHẬP</th>
                    <th>MẬT KHẨU</th>
                    <th>EMAIL</th>
                    <th>ĐỊA CHỈ</th>
                    <th>VAI TRÒ</th>
                    <th></th>
                </tr>
                <?php 
                $listkhachhang = loadall_khachhang();
                foreach ($listkhachhang as $khachhang) {
                    extract($khachhang);
                    $suatk="index.php?act=suatk&maKhachHang=".$maKhachHang;
                    $xoatk="index.php?act=xoatk&maKhachHang=".$maKhachHang;
                    echo '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$maKhachHang.'</td>
                        <td>'.$tenKhachHang.'</td>
                        <td>'.$matKhau.'</td>
                        <td>'.$email.'</td>
                        <td>'.$diaChi.'</td>
                        <td>'.$vaiTro.'</td>
                        <td><a href="'.$suatk.'"><input type="button" value="Sửa"></a> <a href="'.$xoatk.'"><input type="button" value="Xóa"></a></td>

                    </tr>';
                }
                ?>
                
            </table>
        </div>

        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=addkh"><input type="button" value="Nhập thêm"></a>
        </div>
    </div>

</div>