<div>
    <h1>Đăng ký tài khoản</h1>
    <div>
        <form action="index.php?act=dangKy" method="post">
            <div>
                <label for="email">Email</label>
                <input type="email" name="email">
            </div>
            <div>
                <label for="tenKhachHang">tenKhachHang</label>
                <input type="text" name="tenKhachHang">
            </div>
            <div>
                <label for="matKhau">matKhau</label>
                <input type="password" name="matKhau">
            </div>
            <input onclick="noti()" type="submit" name="btn-dk" value="Đăng ký">
            <input type="reset" value="Nhập lại">
        </form>
        <?php 
        if(isset($thongbao)&& $thongbao!='' && isset($_POST['btn-dk'])) {
            echo $thongbao;
            header("location: index.php");
            
        }
         ?>
    </div>
</div>
<script>
function noti() {
    alert('đăng ký thành công! Quay trở lại đăng nhập?')
}
</script>