<?php 
if(isset($_COOKIE['rememberMe'])) {
    $rememberMe = $_COOKIE['rememberME'];
}else{
    $rememberMe ='';
}
 ?>

<div class="form-sign">
    <div>
        <div class="user">
            <P>*chưa đăng nhập*</P>
        </div>
        <form action="index.php" method="post">
            <label for="email">Email</label><br>
            <input type="email" name="email"><br><br>
            <label for="matKhau">Mật khẩu</label><br>
            <input type="password" name="matKhau"><br><br>
            <label for="rememberMe">Ghi nhớ tài khoản?</label><br>
            <input type="checkbox" name="rememberMe" <?php echo $rememberMe ?> id=""><br><br>
            <input type="submit" name="btn-dN" value="Đăng nhập">
        </form>
        <hr>

        <a href="index.php?act=dangKy">Đăng ký tài khoản</a><br><br>
        <a href="index.php?act=forgotPass">Quên mật khẩu</a>
    </div>

</div>