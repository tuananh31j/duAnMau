<div>
    <h1>Sửa loại hàng:</h1>
    <?php
    if(isset($_POST['btn-update']))
    echo $noti
;    ?>
    <form action="index.php?act=updateLH" method="post">
        <input type="text" name="maLoai" placeholder="mã loại" value="<?php echo $id ?>"><br>
        <input type="text" name="tenLoai" placeholder="tên loại"
            value="<?php echo isset($targetLH['tenLoai'])?$targetLH['tenLoai']:'' ?>"><br>
        <input type="submit" name="btn-update" value="Cập nhật"><br>
        <a id="lh" href="index.php?act=listLH">Danh sách</a>
    </form>

</div>