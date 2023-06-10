<!-- main content -->
<div class="col mt-5">
    <div class="mt5">
        <?php
    if(isset($_POST['btn-add']))
    echo $noti
    ?>
        <h1>thêm Khách hàng:</h1>
        <form action="index.php?act=addKH" enctype="multipart/form-data" method="post">
            <input type="text" name="maKhachHang" hidden placeholder="mã khách hàng"><br>
            <!-- tên -->
            <div class="mb-3">
                <label for="tenKhachHang" class="form-label">Tên khách hàng</label>
                <input type="text" name="tenKhachHang" placeholder="tên khách hàng" class="form-control">

            </div>
            <!-- mat khau -->
            <div class="mb-3">
                <label for="matKhau" class="form-label">Mật khẩu</label>
                <input type="password" name="matKhau" placeholder="Mật khẩu" class="form-control">
            </div>
            <!-- email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" placeholder="email của bạn" class="form-control">

            </div>
            <!-- anh -->
            <div class="mb-3">
                <label for="anh" class="form-label">Ảnh đại diện</label>
                <input type="file" name="anh" class="form-control">

            </div>
            <!-- vai trò -->
            <div class="mb-3">
                <label for="vaiTro" class="form-label">Vai trò</label>
                <input type="text" name="vaiTro" placeholder="Vai trò" class="form-control">

            </div>
            <!-- btn -->
            <div>
                <input type="submit" class="btn btn-primary" name="btn-add" value="Thêm">
                <input class="btn btn-info" type="reset" value="Nhập lại">
                <a class="btn btn-success text-dark" href="index.php?act=listKH">Danh sách</a></>
            </div>

    </div>

    </form>

</div>

</div>
</div>