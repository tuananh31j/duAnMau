<div>
    <p class="text-center">Xin chào! <?php echo $_SESSION['user']['tenKhachHang'] ?></p>
    <div class="text-center d-flex align-items-center">

        <div class="ms-3">
            <img class="text-center ms-5" id="user-img" class="rounded mx-auto d-block" class="img-thumbnail"
                src="img/<?php echo $_SESSION['user']['anh'] ?>" alt="">

        </div>

        <div class="ms-3" id="acc">
            <p class="fa-solid fa-sort-down">
            </p>
        </div>

    </div>

    <div class="text-end">


        <div id="acchide" class="nav flex-column nav-pills me-3" class="acchide" class="acsount-box " id="menu2"
            role="tablist" aria-orientation="vertical">

            <a href="index.php?act=userUpdate">Chỉnh sửa thông tin</a>
            <a href="index.php?act=forgotPass">Quên mật khẩu</a>
            <?php if($_SESSION['user']['vaiTro'] == 1) {
        ?>
            <a id="ad" href="admin/">Trang Quản trị <span class="fa-solid fa-arrow-right text-dark"></span></a>
            <?php } ?>
            <a href="index.php?act=dangXuat">Đăng xuất</a>
        </div>


    </div>

</div>