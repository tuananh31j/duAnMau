<div class="col mt-5">
    <h1>Thêm loại hàng:</h1>
    <div class="mt-5s">
        <?php
    if(isset($noti))
    echo "<p class='text-danger'>".$noti."</p>";
    ?>

        <form action="index.php?act=addLH" method="post">

            <input type="text" name="maLoai" hidden placeholder="mã loại">
            <div class="mb-3">
                <label for="tenLoai" class="form-label">Tên loại</label>
                <input type="text" name="tenLoai" placeholder="Nhập tên loại" class="form-control">
                <div>
                    <p class="text-danger"><?php echo isset($err)?$err:'' ?></p>
                </div>

            </div>
            <div>
                <input type="submit" class="btn btn-primary" name="btn-add" value="Thêm">
                <input class="btn btn-info" type="reset" value="Nhập lại">
                <a class="btn btn-success text-dark" id="lh" href="index.php?act=listLH">Danh sách</a>
            </div>
        </form>

    </div>
</div>


</div>
</div>