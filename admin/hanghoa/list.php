<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH HÀNG HÓA</h1>
    </div>
    <div class="row frmcontent">
        <div class="row frmkh">
            <table border="1">
                <tr>
                    <th></th>
                    <th>MÃ HÀNG HÓA</th>
                    <th>TÊN HÀNG HÓA</th>
                    <th>ĐƠN GIÁ</th>
                    <th>GIẢM GIÁ</th>
                    <th>ẢNH</th>
                    <th>NGÀY NHẬP</th>
                    <th>MÃ LOẠI</th>
                    <th>SỐ LƯỢT XEM</th>
                    <th>MÔ TẢ</th>
                    <th></th>
                </tr>
                <?php 
                $listhanghoa = loadall_hanghoa();
                foreach ($listhanghoa as $hanghoa) {
                    extract($hanghoa);
                    $suahh="index.php?act=suahh&maHangHoa=".$maHangHoa;
                    $xoahh="index.php?act=xoahh&maHangHoa=".$maHangHoa;
                    echo '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$maHangHoa.'</td>
                        <td>'.$tenHangHoa.'</td>
                        <td>'.$donGia.'</td>
                        <td>'.$giamGia.'</td>
                        <td>'.$anh.'</td>
                        <td>'.$ngayNhap.'</td>
                        <td>'.$maLoai.'</td>
                        <td>'.$soLuotXem.'</td>
                        <td>'.$moTa.'</td>
                        <td><a href="'.$suahh.'"><input type="button" value="Sửa"></a> <a href="'.$xoahh.'"><input type="button" value="Xóa"></a></td>

                    </tr>';
                }
                ?>
                
            </table>
        </div>

        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=addhh"><input type="button" value="Nhập thêm"></a>
        </div>
    </div>

</div>