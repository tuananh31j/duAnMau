<!-- main content -->
<div class="col mt-5">
    <div class="row mt-5">
        <h1>Sửa thông tin khách hàng:</h1>

        <div class="col-1">
            <img class="img-fluid " src="../img/<?php echo $targetKH['anh'] ?>" alt="">
        </div>
        <?php
    if(isset($noti))
    echo "<p class='text-danger'>".$noti."</p>";
    ?>

        <form action="index.php?act=updateKH" enctype="multipart/form-data" method="post">
            <!-- mã -->
            <input type="text" name="maKhachHang" hidden placeholder="mã loại" value="<?php echo $id ?>"><br>
            <!-- tên -->
            <div class="mb-3">
                <label class="form-label" for="tenKhachHang">Tên khách hàng</label>
                <input type="text" name="tenKhachHang" class="form-control"
                    value="<?php  echo isset($_SESSION['updateUser']['tenKhachHang'])?$_SESSION['updateUser']['tenKhachHang']:''?>">
                <div>
                    <p class="text-danger"><?php echo isset($err['tenKH'])?$err['tenKH']:'' ?></p>
                </div>

            </div>
            <!-- mật khẩu -->
            <div class="mb-3">
                <label class="form-label" for="matKhau">Mật khẩu</label>
                <input type="text" name="matKhau" class="form-control"
                    value="<?php echo isset($_SESSION['updateUser']['matKhau'])?$_SESSION['updateUser']['matKhau']:'' ?>">
                <div>
                    <p class="text-danger"><?php echo isset($err['mkKH'])?$err['mkKH']:'' ?></p>
                </div>

            </div>
            <!-- email -->
            <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <input type="email" name="email" class="form-control"
                    value="<?php echo isset($_SESSION['updateUser']['email'])?$_SESSION['updateUser']['email']:'' ?>">
                <div>
                    <p class="text-danger"><?php echo isset($err['email'])?$err['email']:'' ?></p>
                </div>

            </div>
            <!-- ảnh -->
            <div class="mb-3">
                <label class="form-label" for="anh">Ảnh đại diện</label>
                <input type="file" name="anh" class="form-control"
                    value="<?php echo isset($_SESSION['updateUser']['anh'])?$_SESSION['updateUser']['anh']:'' ?>">

            </div>
            <!-- trạng thái -->
            <div class="mb-3">
                <label class="form-label" for="kichHoat">Trạng thái</label>
                <input type="text" name="kichHoat" class="form-control"
                    value="<?php echo isset($_SESSION['updateUser']['kichHoat'])?$_SESSION['updateUser']['kichHoat']:'' ?>">
                <div>
                    <p class="text-danger"><?php echo isset($err['status'])?$err['status']:'' ?></p>
                </div>

            </div>
            <!-- vai trò -->
            <div class="mb-3">
                <label class="form-label" for="vaiTro">Vai trò</label>
                <input type="text" name="vaiTro" class="form-control"
                    value="<?php echo isset($_SESSION['updateUser']['vaiTro'])?$_SESSION['updateUser']['vaiTro']:'' ?>">
                <div>
                    <p class="text-danger"><?php echo isset($err['vaiTro'])?$err['vaiTro']:'' ?></p>
                </div>

            </div>
            <!-- btn -->
            <input class="btn btn-primary" type="submit" name="btn-update" value="Cập nhật">
            <input class="btn bg-warning" type="reset" value="Nhập lại">
            <a class="btn bg-success" id="lh" href="index.php?act=listKH">Danh sách</a>


        </form>

    </div>
</div>

</div>
</div>