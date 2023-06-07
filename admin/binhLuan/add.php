<!-- main content -->
<div class="col mt-5">
    <div class="mt5">
        <?php
    if(isset($_POST['btn-add']))
    echo $noti
    ?>
        <h1>Thêm bình luận:</h1>
        <form action="index.php?act=addCMT" enctype="multipart/form-data" method="post">
            <input type="text" name="maBinhLuan" hidden><br>
            <!-- nộidung -->
            <div class="mb-3">
                <label for="noiDung" class="form-label">Tên khách hàng</label>
                <input type="text" name="noiDung" placeholder="Nhập nội dung" class="form-control">

            </div>
            <!-- ngày -->
            <div class="mb-3">
                <label for="ngayBinhLuan" class="form-label">Ngày bình luận</label>
                <input type="date" name="ngayBinhLuan" class="form-control">
            </div>
            <!-- maKhachHang -->
            <div class="mb-3">
                <label for="maKhach" class="form-label">Email</label>
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
        <div><button class="btn btn-primary"><a id="lh" href="index.php?act=listKH">Danh sách</a></button></div>

    </div>
</div>

</div>
</div>