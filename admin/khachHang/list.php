<!-- main content -->
<div class="col mt-5 text-center">
    <h1>Danh sách khách hàng:</h1>
    <div class="list_lh mt-5">
        <?php if(isset($noti) && $noti != '') {

?>
        <p><?php echo $noti ?></p>
        <?php } 
?>
        <table id="table" class="table table-striped">
            <thead class="bg-success">
                <tr>
                    <td>Chọn</td>
                    <td id="maKhachHang">Mã Khách hàng</td>
                    <td>Tên khách hàng</td>
                    <td>Email</td>
                    <td>Ảnh đại diện</td>
                    <td id="vaiTro">Vai trò</td>
                    <td class="bg-danger">Chức năng nhanh</td>
                </tr>


            </thead>
            <tbody>
                <form action="index.php?act=deleteKH" method="post">
                    <?php
                        foreach($danhsachKH as $ds) {
                
            
                        ?>
                    <tr>
                        <td><input type="checkbox" name="box[]" value="<?php echo $ds["maKhachHang"] ?>" id=""></td>
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

                    <div>
                        <!-- chọn all -->
                        <button id="btn_Check_All" type="button" class="btn btn-primary">(chọn/bỏ) tất cả</button>
                        <!-- xóa all -->
                        <button onclick="return noti_delete_all()" type="submit"
                            class="btn btn-danger  btn_Delete_All opacity-25">Xóa</button>
                        <!-- mới nhất -->
                        <a onclick="setColor(maKhachHang)" id="btn_DECS" href="index.php?act=listKH&btn=btn_DESC"
                            class="btn btn-success">Khách hàng mới nhất</a>
                        <!-- cũ nhất -->
                        <a onclick="setColor(maKhachHang)" href="index.php?act=listKH&btn=btn_ASC"
                            class="btn btn-secondary ">Khách Hàng cũ nhất</a>
                        <!-- admin -->
                        <a onclick="setColor(vaiTro)" href="index.php?act=listKH&btn=btn_admin" type="button"
                            class="btn btn-warning">Admins</a>
                        <!-- khách hàng -->
                        <a onclick="setColor(vaiTro)" href="index.php?act=listKH&btn=btn_member" type="button"
                            class="btn btn-info">Members</a>
                        <!-- thêm -->
                        <a href="index.php?act=addKH" class="btn btn-dark">Thêm</a>
                    </div>
                </form>
            </tbody>
        </table>

    </div>
</div>

</div>
</div>