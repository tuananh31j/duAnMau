<div>
    <h1 class="text-center">Quên mật khẩu</h1>
    <div class="container">


        <form action="index.php?act=forgotPass" method="post">
            <div class="mb-3">
                <label class="form-label " for="email">Email</label>
                <input type="email" class="form-control" name="email">

            </div>
            <div class="mb-3">
                <label class="form-label" for="tenKhachHang">Tên người dùng</label>
                <input type="text" name="tenKhachHang" class="form-control">
            </div>

            <input class="btn btn-primary" type="submit" name="btn-getPass" value="Gửi">
            <input class="btn btn-success" type="reset" value="Nhập lại">

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