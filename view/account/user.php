<div>
    <div class="text-center">



        <a class="" href="index.php?act=userUpdate">
            <p>Xin chào! <?php echo $_SESSION['user']['tenKhachHang'] ?></p>
            <img class="text-center" id="user-img" src="img/<?php echo $_SESSION['user']['anh'] ?>" alt="">


        </a>



    </div>


    <div class="nav flex-column nav-pills me-3" class="acchide" class="acsount-box " id="menu2" role="tablist"
        aria-orientation="vertical">

        <a href="index.php?act=userUpdate">Chỉnh sửa thông tin</a>
        <a href="index.php?act=forgotPass">Quên mật khẩu</a>
        <?php if($_SESSION['user']['vaiTro'] == 1) {
        ?>
        <a href="admin/">Trang Quản trị</a>
        <?php } ?>
        <a href="index.php?act=dangXuat">Đăng xuất</a>
    </div>




</div>
