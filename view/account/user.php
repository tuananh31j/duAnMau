<div>
    <div class="">

        <p>Xin chào! <?php echo $_SESSION['user']['tenKhachHang'] ?></p>

        <a href="index.php?act=userUpdate">
            <img id="user-img" src="img/<?php echo $_SESSION['user']['anh'] ?>" alt="">

            <p>Chỉnh sửa thông tin</p>
        </a>



    </div>

    <a href="index.php?act=quenMatKhau">Quên mật khẩu</a><br><br>
    <?php if($_SESSION['user']['vaiTro'] == 1) {
        ?>
    <a href="admin/">Trang Quản trị</a><br><br>
    <?php } ?>
    <a href="index.php?act=dangXuat">Đăng xuất</a>
</div>