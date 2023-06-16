<?php 
if(isset($_COOKIE['rememberMe'])) {
    $rememberMe = $_COOKIE['rememberME'];
}else{
    $rememberMe ='';
}
 ?>

<div class="form-sign">
    <div class="ms-3" id="acc">
        <p class="fa-solid fa-sort-down">
        </p>
    </div>
    <div id="acchide">
        <div class="user">
            <P>*chưa đăng nhập*</P>
        </div>
        <form action="index.php" method="post">
            <label for="email">Email</label><br>
            <div class="text-danger" class="form-text">
                <?php echo isset($err['email'])?$err['email']:'' ?></div>
            <input type="email" name="email">
            <br><br>
            <label for="matKhau">Mật khẩu</label><br>
            <input type="password" name="matKhau">
            <div class="text-danger" class="form-text">
                <?php echo isset($err['matKhau'])?$err['matKhau']:'' ?></div>
            <br><br>
            <label for="rememberMe">Ghi nhớ tài khoản?</label><br>
            <input type="checkbox" name="rememberMe" <?php echo $rememberMe ?> id=""><br><br>
            <input class='btn bg-info' type="submit" name="btn-dN" value="Đăng nhập">
        </form>
        <hr>

        <a href="index.php?act=dangKy">Đăng ký tài khoản</a><br><br>
        <a href="index.php?act=forgotPass">Quên mật khẩu</a>
    </div>

</div>