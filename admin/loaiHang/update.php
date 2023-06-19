<!-- main content -->
<div class="col mt-5">
    <div class="mt-5">
        <h1>Sửa loại hàng:</h1>
        <?php
    if(isset($noti))
    echo $noti
;    ?>
        <form action="index.php?act=updateLH" method="post">
            <input type="text" name="maLoai" hidden placeholder="mã loại" value="<?php echo $id ?>">
            <input type="text" name="tenLoai" placeholder="tên loại"
                value="<?php echo isset($targetLH['tenLoai'])?$targetLH['tenLoai']:'' ?>">
            <div>
                <p class="text-danger"><?php echo isset($err)?$err:'' ?></p>
            </div>

            <input class="btn bg-success text-light" type="submit" name="btn-update" value="Cập nhật">
            <a class="btn bg-dark text-light" id="lh" href="index.php?act=listLH">Danh sách</a>
        </form>

    </div>
</div>

</div>
</div>