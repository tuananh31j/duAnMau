<div>
    <h1>Cập nhật thông tin cá nhân</h1>
    <div>
        <img src="img/<?php echo $_SESSION['user']['anh'] ?>" alt="">
    </div>
    <div>
        <form action="index.php?act=userUpdate" enctype="multipart/form-data" method="post">
            <input type="text" name="maKhachHang" hidden value="<?php echo $_SESSION['user']['maKhachHang'] ?>">
            <div>
                <label for="tenKhachHang">Tên người dùng</label>
                <input type="text" name="tenKhachHang" value="<?php echo $_SESSION['user']['tenKhachHang'] ?>">
            </div>
            <div>
                <label for="matKhau">Mật khẩu</label>
                <input type="text" name="matKhau" value="<?php echo $_SESSION['user']['matKhau'] ?>">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" value="<?php echo $_SESSION['user']['email'] ?>">
            </div>
            <div>
                <label for="anh">Ảnh đại diện</label>
                <input type="file" name="anh">
            </div>
            <input onclick="noti()" type="submit" value="Cập nhật" name="btn-userUpdate">
            <input type="reset" value="Nhập lại">


        </form>
    </div>
</div>
<script>
function noti() {
    alert("Cập nhật tài khoản thành công!");
}
</script>