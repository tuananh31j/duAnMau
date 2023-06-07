<!-- main content -->
<div class="col mt-5">
    <div class="list_lh mt-5">
        <?php if(isset($noti) && $noti != '') {

?>
        <p><?php echo $noti ?></p>
        <?php } 
?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>Chọn</td>
                    <td id="maBinhLuan">Mã bình luận</td>
                    <td id="maKhachHang">Mã Khách hàng</td>
                    <td id="maHangHoa">Mã hàng hóa</td>
                    <td>Ngày</td>
                    <td>Nội dung</td>
                    <td>Chức năng</td>
                </tr>


            </thead>
            <tbody>
                <form action="index.php?act=deleteCMT" method="post">
                    <?php
            foreach($danhsachCMT as $ds) {
                
            
            ?>
                    <tr>
                        <td><input type="checkbox" name="box[]" value="<?php echo $ds["maBinhLuan"] ?>" id=""></td>
                        <td><?php echo $ds["maBinhLuan"] ?></td>
                        <td><?php echo $ds["maKhachHang"] ?></td>
                        <td><?php echo $ds["maHangHoa"] ?></td>
                        <td><?php echo $ds["ngayBinhLuan"] ?></td>
                        <td><?php echo $ds["noiDung"] ?></td>
                        <td><a href="index.php?act=updateCMT&id=<?php echo $ds['maBinhLuan'] ?>">Sửa</a>|
                            <a href="index.php?act=deleteCMT&id=<?php echo $ds['maBinhLuan'] ?>">Xóa</a>
                        </td>
                    </tr>
                    <?php
            }
            ?>
                    <div>
                        <button id="btn_Check_All" type="button" class="btn btn-primary">(chọn/bỏ) tất cả</button>
                        <button onclick="return noti_delete_all()" type="submit"
                            class="btn btn-danger btn_Delete_All opacity-25">Xóa</button>
                        <a onclick="setColor(maBinhLuan)" id="btn_DECS" href="index.php?act=listCMT&btn=btn_desc"
                            class="btn btn-success">Bình luận mới nhất</a>
                        <a onclick="setColor(maBinhLuan)" href="index.php?act=listCMT&btn=btn_asc"
                            class="btn btn-secondary">Bình luận cũ nhất</a>
                        <a onclick="setColor(maKhachHang)" href="index.php?act=listCMT&btn=btn_KH" type="button"
                            class="btn btn-warning">Nhóm CMT(khách
                            Hàng)</a>
                        <a onclick="setColor(maHangHoa)" href="index.php?act=listCMT&btn=btn_HH" type="button"
                            class="btn btn-info">Nhóm CMT(hàng
                            hóa)</a>
                        <a href="index.php?act=addCMT" class="btn btn-dark">Thêm+</a>
                        <button type="button">Dark</button>


                    </div>
                </form>
            </tbody>
        </table>


    </div>
</div>

</div>
</div>