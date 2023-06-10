<div>
    <h1 class="text-center">Đăng ký tài khoản</h1>
    <div class="container">
        <form action="index.php?act=dangKy" method="post">
            <div>
                <label class="form-label" for="email">Email</label>
                <input class="form-control" type="email" name="email">
            </div>
            <div>
                <label class="form-label" for="tenKhachHang">Tên người dùng</label>
                <input class="form-control" type="text" name="tenKhachHang">
            </div>
            <div>
                <label class="form-label" for="matKhau">Mật khẩu</label>
                <input class="form-control" type="password" name="matKhau">
            </div>
            <input class="btn bg-info text-light" onclick="noti_signup()" type="submit" name="btn-dk" value="Đăng ký">
            <input class="btn bg-success text-light" type="reset" value="Nhập lại">
        </form>
        <?php 
        if(isset($thongbao)&& $thongbao!='' && isset($_POST['btn-dk'])) {
            echo $thongbao;
            header("location: index.php");
            
        }
         ?>
    </div>
</div>