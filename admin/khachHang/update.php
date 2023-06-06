<!-- main content -->
<div class="col mt-5">
    <div class="mt-5">
        <h1>Sửa thông tin khách hàng:</h1>

        <div>
            <img src="../img/<?php echo $targetKH['anh'] ?>" alt="">
        </div>
        <?php

    if(isset($_POST['btn-update']))
    echo $noti;
    ?>

        <form action="index.php?act=updateKH" enctype="multipart/form-data" method="post">
            <!-- mã -->
            <input type="text" name="maKhachHang" hidden disabled placeholder="mã loại"
                value="<?php echo $maKhachHang ?>"><br>
            <div class="mb-3">
                <label class="form-label" for="tenKhachHang">Tên khách hàng</label>
                <input type="text" name="tenKhachHang" class="form-control"
                    value="<?php echo $targetKH['tenKhachHang']?>">

            </div>
            <!-- mật khẩu -->
            <div class="mb-3">
                <label class="form-label" for="matKhau">Mật khẩu</label>
                <input type="text" name="matKhau" class="form-control"
                    value="<?php echo isset($targetKH['matKhau'])?$targetKH['matKhau']:'' ?>">

            </div>
            <!-- email -->
            <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <input type="email" name="email" class="form-control"
                    value="<?php echo isset($targetKH['email'])?$targetKH['email']:'' ?>">

            </div>
            <!-- ảnh -->
            <div class="mb-3">
                <label class="form-label" for="anh">Ảnh đại diện</label>
                <input type="file" name="anh" class="form-control"
                    value="<?php echo isset($targetKH['anh'])?$targetKH['anh']:'' ?>">

            </div>
            <!-- trạng thái -->
            <div class="mb-3">
                <label class="form-label" for="kichHoat">Trạng thái</label>
                <input type="text" name="kichHoat" class="form-control"
                    value="<?php echo isset($targetKH['kichHoat'])?$targetKH['kichHoat']:'' ?>">

            </div>
            <!-- vai trò -->
            <div class="mb-3">
                <label class="form-label" for="vaiTro">Vai trò</label>
                <input type="text" name="vaiTro" class="form-control"
                    value="<?php echo isset($targetKH['vaiTro'])?$targetKH['vaiTro']:'' ?>">

            </div>
            <!-- btn -->
            <input class="btn btn-primary" type="submit" name="btn-update" value="Cập nhật"><br>
            <input type="reset" value="Nhập lại">
            <a id="lh" href="index.php?act=listKH">Danh sách</a>


        </form>

    </div>
</div>

</div>
</div>