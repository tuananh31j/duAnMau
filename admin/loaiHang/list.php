<div class="col mt-5 text-center">
    <h1>Danh sách loại hàng</h1>
    <div class=" mt-5">
        <?php if(isset($noti) && $noti != '') {

?>
        <p><?php echo $noti ?></p>
        <?php } 
?>
        <table id="table" class="table table-striped">
            <thead class="bg-success">

                <td>Chọn</td>
                <td id="maLoai">Mã loại</td>
                <td>Tên loại</td>
                <td class="bg-danger">Chức năng nhanh</td>

            </thead>
            <tbody>
                <form action="index.php?act=deleteLH" method="post">
                    <?php
                        foreach($danhsachLH as $ds) {
                
            
                         ?>
                    <tr>
                        <td><input type="checkbox" name="box[]" value="<?php echo $ds["maLoai"] ?>" id=""></td>
                        <td><?php echo $ds["maLoai"] ?></td>
                        <td><?php echo $ds["tenLoai"] ?></td>
                        <td><a href="index.php?act=updateLH&id=<?php echo $ds['maLoai'] ?>">Sửa</a>|
                            <a href="index.php?act=deleteLH&id=<?php echo $ds['maLoai'] ?>">Xóa</a>
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
                        <a onclick="setColor(maLoai)" id="btn_DECS" href="index.php?act=listLH&btn=btn_DESC"
                            class="btn btn-success">Mới nhất</a>
                        <!-- cũ nhất -->
                        <a onclick="setColor(maLoai)" href="index.php?act=listLH&btn=btn_ASC"
                            class="btn btn-secondary ">Cũ nhất</a>

                        <!-- thêm -->
                        <a href="index.php?act=addLH" class="btn btn-dark">Thêm</a>

                    </div>
                </form>
            </tbody>
        </table>


    </div>
</div>

</div>
</div>