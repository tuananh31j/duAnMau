<!-- main content -->
<div class="col mt-5">
    <div class="mt5">
        <?php
    if(isset($_POST['btn-add']))
    echo $noti
    ?>
        <h1>Thêm hàng hóa:</h1>
        <form action="index.php?act=addKH" enctype="multipart/form-data" method="post">
            <input type="text" name="maHangHoa" disabled hidden><br>
            <!-- tên -->
            <div class="mb-3">
                <label for="tenHangHoa" class="form-label">Tên hàng hóa</label>
                <input type="text" name="tenHangHoa" placeholder="tên hàng hóa" class="form-control">

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
                <label for="anh" class="form-label">Tên khách hàng</label>
                <input type="file" name="anh" placeholder="Ảnh đại diện" class="form-control">

            </div>
            <!-- vai trò -->
            <div class="mb-3">
                <label for="vaiTro" class="form-label">Vai trò</label>
                <input type="text" name="vaiTro" placeholder="Vai trò" class="form-control">

            </div>
            <!-- btn -->
            <input type="submit" class="btn btn-primary" name="btn-add" value="Thêm"><br>

            <input class="btn btn-info" type="reset" value="Nhập lại">

        </form>
        <div><button class="btn btn-primary"><a id="lh" href="index.php?act=listLH">Danh sách</a></button></div>

    </div>
</div>

</div>
</div>