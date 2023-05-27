<div>
    <?php
    if(isset($_POST['btn-add']))
    echo $noti
    ?>
    <h1>thêm loại hàng:</h1>
    <form action="index.php?act=addLH" method="post">
        <input type="text" name="maLoai" disabled placeholder="mã loại"><br>
        <input type="text" name="tenLoai" placeholder="tên loại"><br>
        <input type="submit" name="btn-add" value="Thêm"><br>
        <a id="lh" href="index.php?act=listLH">Danh sách</a>
    </form>

</div>