<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH BÌNH LUẬN</h1>
    </div>
    <div class="row frmcontent">
        <div class="row frmbl">
            <table border="1">
                <tr>
                    <th></th>
                    <th>MÃ BÌNH LUẬN</th>
                    <th>NỘI DUNG</th>
                    <th>NGÀY BÌNH LUẬN</th>
                    <th>MÃ HÀNG HÓA</th>
                    <th>MÃ KHÁCH HÀNG</th>
                    <th></th>
                </tr>
                <?php 
                $listbinhluan=loadall_binhluan(0);
                foreach ($listbinhluan as $binhluan){
                    extract($binhluan);
                    $xoabl="index.php?act=xoabl&maBinhLuan=".$maBinhLuan;

                    echo '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$maBinhLuan.'</td>
                        <td>'.$noiDung.'</td>
                        <td>'.$ngayBinhLuan.'</td>
                        <td>'.$maHangHoa.'</td>
                        <td>'.$maKhachHang.'</td>
                        <td><a href="'.$xoabl.'"><input type="button" value="Xóa"></a></td>

                    </tr>';
                }
                ?>
            </table>
        </div>

        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?arc=dmbl"><input type="button" value="Nhập thêm"></a>
        </div>
    </div>

</div>