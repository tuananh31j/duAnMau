<div>
    <?php
    if(isset($_POST['btn-add']))
    echo $noti
    ?>
    <h1>thêm Khách hàng:</h1>
    <form action="index.php?act=addKH" enctype="multipart/form-data" method="post">
        <input type="text" name="maKhachHang" disabled hidden placeholder="mã khách hàng"><br>
        <input type="text" name="tenKhachHang" placeholder="tên khách hàng"><br>
        <input type="password" name="matKhau" placeholder="Mật khẩu"><br>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="file" name="anh" placeholder="Ảnh đại diện"><br>
        <input type="text" name="vaiTro" placeholder="Vai trò"><br>
        <input type="submit" name="btn-add" value="Thêm"><br>

        <input type="reset" value="Nhập lại">
    </form>
    <div><a id="lh" href="index.php?act=listLH">Danh sách</a></div>

</div>