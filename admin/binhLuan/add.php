<!-- main content -->
<div class="col mt-5">
    <div class="mt5">
        <?php
    if(isset($_POST['btn-add']))
    echo $noti
    ?>
        <h1>Thêm bình luận:</h1>
        <form action="index.php?act=addCMT" enctype="multipart/form-data" method="post">
            <input type="text" name="maBinhLuan" hidden><br>

            <!-- chọn hàng hóa -->
            <div class="mb-3">
                <label for="maHangHoa" class="form-label">Chọn hàng hóa:</label><br>
                <select name="maHangHoa" id="">
                    <?php foreach($danhsachHH as $ds) { ?>
                    <option value="<?php echo $ds["maHangHoa"] ?>"><?php echo $ds["tenHangHoa"] ?></option>
                    <?php } ?>
                </select>

            </div>

            <!-- ngày -->
            <div class="mb-3">
                <label for="ngayBinhLuan" class="form-label">Ngày bình luận:</label>
                <input type="date" name="ngayBinhLuan" class="form-control">
            </div>


            <!-- Nội dung -->
            <div class="mb-3">
                <label for="noiDung" class="form-label">Nội dung:</label>
                <input type="text" name="noiDung" placeholder="Nhập nội dung" class="form-control">

            </div>
            <!-- btn -->

            <div>
                <input type="submit" class="btn btn-primary" name="btn-add" value="Thêm">
                <input class="btn btn-info" type="reset" value="Nhập lại">
                <button class="btn btn-success "><a class="text-light" id="lh" href="index.php?act=listCMT">Danh
                        sách</a></button>
            </div>

        </form>

    </div>
</div>

</div>
</div>