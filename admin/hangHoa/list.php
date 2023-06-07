<!-- main content -->
<div class="col-8 mt-5">
    <div class="list_lh mt-5">
        <?php if(isset($err) && $err != '') {

?>
        <p><?php echo $err ?></p>
        <?php } 
?>
        <table id="table" class="table table-striped">
            <thead class="bg-success">
                <tr>
                    <td>Chọn</td>
                    <td>Mã</td>
                    <td>Tên</td>
                    <td>giá</td>
                    <td>Ảnh</td>
                    <td>Ngày Nhập</td>
                    <td>Đặc biệt</td>
                    <td>Mô tả</td>
                    <td>Giảm giá</td>
                    <td>Loại</td>
                    <td>View</td>
                    <td>Chức năng</td>
                </tr>
            </thead>
            <tbody>
                <form action="" method="post">
                    <?php
            foreach($danhsachHH as $ds) {
                
            
            ?>
                    <tr>
                        <td><input type="checkbox" name="box" value="<?php echo $ds["maHangHoa"] ?>" id=""></td>
                        <td><?php echo $ds["maHangHoa"] ?></td>
                        <td><?php echo $ds["tenHangHoa"] ?></td>
                        <td><?php echo $ds["donGia"] ?></td>
                        <td><?php echo $ds["anh"] ?></td>
                        <td><?php echo $ds["ngayNhap"] ?></td>
                        <td><?php echo $ds["dacBiet"] ?></td>
                        <td><?php echo $ds["moTa"] ?></td>
                        <td><?php echo $ds["giamGia"] ?></td>
                        <td><?php echo $ds["tenLoai"] ?></td>
                        <td><?php echo $ds["soLuotXem"] ?></td>
                        <td><a href="index.php?act=updateHH&id=<?php echo $ds['maHangHoa'] ?>">Sửa</a>|
                            <a href="index.php?act=deleteHH&id=<?php echo $ds['maHangHoa'] ?>">Xóa</a>
                        </td>
                    </tr>
                    <?php
            }
            ?>
                    <div>
                        <button id="btn_Check_All" type="button" class="btn btn-primary">(chọn/bỏ) tất cả</button>
                        <button onclick="return noti_delete_all()" type="submit"
                            class="btn btn-danger  btn_Delete_All opacity-25">Xóa</button>
                        <a onclick="setColor(maBinhLuan)" id="btn_DECS" href="index.php?act=listCMT&btn=btn_desc"
                            class="btn btn-success">Hàng hóa mới nhất</a>
                        <a onclick="setColor(maBinhLuan)" href="index.php?act=listCMT&btn=btn_asc"
                            class="btn btn-secondary ">Hàng hóa cũ nhất</a>
                        <a onclick="setColor(maKhachHang)" href="index.php?act=listCMT&btn=btn_KH" type="button"
                            class="btn btn-warning">Nhiều lượt xem nhất</a>
                        <a onclick="setColor(maHangHoa)" href="index.php?act=listCMT&btn=btn_HH" type="button"
                            class="btn btn-info">Ít lượt xem nhất</a>
                        <a href="index.php?act=addCMT" class="btn btn-success">Thêm</a>
                        <button type="button" class="btn btn-dark">Dark</button>


                    </div>
                </form>
            </tbody>
        </table>


    </div>
</div>

</div>
</div>