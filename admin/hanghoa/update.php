<?php
    if(is_array($hh)){
        extract($hh);
    }
?>

<div class="row">
    <div class="row frmtitle">
        <h1>THÊM MỚI SẢN PHẨM</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updatehh" method="post" enctype="multipart/form-data">

            <div class="row mb10">
                Tên hàng hóa<br>
                <input type="text" name="tenhh" value="<?$tenHanggHoa?>">
            </div>

            <div class="row mb10">
                Đơn giá<br>
                <input type="number" name="dongia" value="<?$donGia?>">
            </div>

            <div class="row mb10">
                Giảm giá<br>
                <input type="number" name="giamgia" value="<?$giamGia?>">
            </div>

            <div class="row mb10">
                Ảnh <br>
                <input type="file" name="anh" value="<?$anh?>">
            </div>

            <div class="row mb10">
               Ngày Nhập <br>
                <input type="date" name="ngaynhap" value="<?$ngayNhap?>">
            </div>

            <div class="row mb10">
                Mã loại <br>
                <input type="number" name="maloai" value="<?$maLoai?>">
            </div>

            <div class="row mb10">
                Số lượt xem <br>
                <input type="number" name="soluotxem" value="<?$soLuotXem?>">
            </div>

            <div class="row mb10">
                Mô tả <br>
                <textarea name="mota" id="" cols="30" rows="10"><?$moTa?></textarea>
            </div>

            <div class="row mb10">
                <input type="submit" name="capnhat" value="Cập Nhật">
                <input type="reset" value="Nhập Lại">
                <a href="index.php?act=listhh"><input type="button" value="Danh Sách"></a>
            </div>
            <?php 
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </form>
    </div>
</div>