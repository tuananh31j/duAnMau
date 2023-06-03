

<div class="row">
    <div class="row frmtitle">
        <h1>SỬA KHÁCH HÀNG</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=suakh" method="post">
            <div class="row mb10">
                Mã Khách Hàng <br>
                <input type="text" name="makh" disabled>
            </div>

            <div class="row mb10">
                Tên Khách Hàng<br>
                <input type="text" name="tenkh" value="<?$tenKhachHang?>">
            </div>

            <div class="row mb10">
                Mật Khẩu<br>
                <input type="password" name="mk" value="<?$matKhau?>">
            </div>

            <div class="row mb10">
                Email<br>
                <input type="email" name="email" value="<?$email?>">
            </div>

            <div class="row mb10">
                Địa Chỉ<br>
                <input type="text" name="diachi" value="<?$diaChi?>">
            </div>

            <div class="row mb10">
                Vai Trò <br>
                <input type="number" name="vaitro" value="<?$vaiTro?>">
            </div>


            <div class="row mb10">
                <input type="submit" name="capnhat" value="Cập Nhật">
                <input type="reset" value="Nhập Lại">
                <a href="index.php?act=dskh"><input type="button" value="Danh Sách"></a>
            </div>
            <?php 
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </form>
    </div>
</div>