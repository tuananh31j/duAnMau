<div>
    <h1>Quên mật khẩu</h1>
    <div>
        <form action="index.php?act=forgotPass" method="post">
            <div>
                <label for="email">Email</label>
                <input type="email" name="email">
            </div>
            <div>
                <label for="tenKhachHang">Tên người dùng</label>
                <input type="text" name="tenKhachHang">
            </div>

            <input type="submit" name="btn-getPass" value="Gửi">
            <input type="reset" value="Nhập lại">
        </form>
        <br>
        <hr>
        <div><a href="index.php">Quay về trang chủ</a></div>
        <?php 
         
        if(isset($yourPass)&& $yourPass!='') {
            echo '<p id="noti" >Thông báo: ', "<span>",$yourPass,"</span></p>";
            
            
        }
         ?>
    </div>
</div>