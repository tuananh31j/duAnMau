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
                    <td>Mã Khách hàng</td>
                    <td>Tên khách hàng</td>
                    <td>email</td>
                    <td>ảnh đại diện</td>
                    <td>vai trò</td>
                    <td>Chức năng</td>
                </tr>


            </thead>
            <tbody>
                <?php
            foreach($danhsachKH as $ds) {
                
            
            ?>
                <tr>
                    <td><input type="checkbox" name="box" value="<?php echo $ds["maKhachHang"] ?>" id=""></td>
                    <td><?php echo $ds["maKhachHang"] ?></td>
                    <td><?php echo $ds["tenKhachHang"] ?></td>
                    <td><?php echo $ds["email"] ?></td>
                    <td><?php echo $ds["anh"] ?></td>
                    <td><?php echo $ds["vaiTro"] ?></td>
                    <td><a href="index.php?act=updateKH&id=<?php echo $ds['maKhachHang'] ?>">Sửa</a>|
                        <a href="index.php?act=deleteKH&id=<?php echo $ds['maKhachHang'] ?>">Xóa</a>
                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <div>
            <button type="button" class="btn btn-primary">(chon/bỏ) tất cả</button>
            <button type="button" class="btn btn-secondary">Secondary</button>
            <button type="button" class="btn btn-success">Success</button>
            <button type="button" class="btn btn-danger">Danger</button>
            <button type="button" class="btn btn-warning">Warning</button>
            <button type="button" class="btn btn-info"><a href="index.php?act=addKH
            ">Thêm</a></button>

            <button type="button" class="btn btn-dark">Dark</button>


        </div>

    </div>
</div>

</div>
</div>