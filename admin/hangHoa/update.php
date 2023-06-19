<!-- main content -->
<div class="col-3 mt-5">
    <?php
    if(isset($noti))
    echo "<p class='text-danger'>".$noti."</p>";
    ?>
    <div class="mt5">

        <h1>Chỉnh sửa hàng hóa:<?php if(isset($_POST['btn-add']))echo `<p>$noti</p>`;?></h1>

        <div class="col-1">
            <img class="img-fluid " src="../img/<?php echo $targetHH['anh'] ?>" alt="">
        </div>
        <form action="index.php?act=updateHH" enctype="multipart/form-data" method="post">
            <!-- mã -->
            <input type="text" name="maHangHoa" hidden value="<?php echo $id ?>"><br>
            <!-- tên -->
            <div class="mb-3">
                <label for="tenHangHoa" class="form-label">Tên hàng hóa</label>
                <input type="text" name="tenHangHoa" placeholder="tên hàng hóa" class="form-control"
                    value="<?php echo isset($targetHH['tenHangHoa'])?$targetHH['tenHangHoa']:'' ?>">
                <div>
                    <p class="text-danger"><?php echo isset($err['tenHH'])?$err['tenHH']:'' ?></p>
                </div>

            </div>
            <!-- giá -->
            <div class="mb-3">
                <label for="donGia" class="form-label">Giá</label>
                <input type="text" name="donGia" placeholder="nhập giá" class="form-control"
                    value="<?php echo isset($targetHH['donGia'])?$targetHH['donGia']:'' ?>">
                <div>
                    <p class="text-danger"><?php echo isset($err['donGia'])?$err['donGia']:'' ?></p>
                </div>

            </div>
            <!-- anh -->
            <div class="mb-3">
                <label for="anh" class="form-label">Ảnh</label>
                <input type="file" name="anh" class="form-control">

            </div>
            <!-- ngay nhap -->
            <div class="mb-3">
                <label for="ngayNhap" class="form-label">Ngày nhập hàng</label>
                <input type="date" name="ngayNhap" placeholder="chọn ngày nhập" class="form-control"
                    value="<?php echo isset($targetHH['ngayNhap'])?$targetHH['ngayNhap']:'' ?>">
                <div>
                    <p class="text-danger"><?php echo isset($err['ngayNhap'])?$err['ngayNhap']:'' ?></p>
                </div>

            </div>
            <!-- ten loai -->
            <div class="mb-3 " class="form-control">
                <label for="tenLoai" class="form-label">Loại</label>
                <select name="tenLoai" id="" class="form-control">
                    <option value="">Chọn loại hàng</option>
                    <?php foreach($danhsachlh as $lh) {
                        
                     ?>
                    <option value="<?php echo $lh['maLoai']?>"
                        <?php echo $lh['maLoai'] == $_SESSION['pro']['maLoai']?"selected":''; ?>>
                        <?php echo $lh['tenLoai']?>
                    </option>
                    <?php } ?>
                </select>
                <div>
                    <p class="text-danger"><?php echo isset($err['loai'])?$err['loai']:'' ?></p>
                </div>

            </div>
            <!-- mô tả -->
            <div class="mb-3">
                <label for="moTa" class="form-label">Mô tả</label>
                <input type="text" name="moTa" placeholder="Nhập mô tả" class="form-control"
                    value="<?php echo isset($targetHH['moTa'])?$targetHH['moTa']:'' ?>">
                <div>
                    <p class="text-danger"><?php echo isset($err['moTa'])?$err['moTa']:'' ?></p>
                </div>


            </div>
            <!-- giảm giá -->
            <div class="mb-3">
                <label for="giamGia" class="form-label">Giảm giá</label>
                <input type="text" name="giamGia" placeholder="Nhập số tiền giảm giá" class="form-control"
                    value="<?php echo isset($targetHH['giamGia'])?$targetHH['giamGia']:'' ?>">

            </div>
            <!-- btn -->
            <div>
                <input type="submit" class="btn btn-primary" name="btn-update" value="Cập nhật">
                <input class="btn btn-info" type="reset" value="Nhập lại">
                <a class="btn btn-success text-dark" id="lh" href="index.php?act=listHH">Danh sách</a>
            </div>

        </form>
        <br><br>


    </div>
</div>

</div>
</div>
<script>

</script>