<div class="row">
    <div class="row frmtitle">
        <h1>THÊM MỚI SẢN PHẨM</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=addhh" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                Mã hàng hóa <br>
                <input type="text" name="mahh" disabled>
            </div>

            <div class="row mb10">
                Tên hàng hóa<br>
                <input type="text" name="tenhh">
            </div>

            <div class="row mb10">
                Đơn giá<br>
                <input type="number" name="dongia">
            </div>

            <div class="row mb10">
                Giảm giá<br>
                <input type="number" name="giamgia">
            </div>

            <div class="row mb10">
                Ảnh <br>
                <input type="file" name="anh">
            </div>

            <div class="row mb10">
               Ngày Nhập <br>
                <input type="date" name="ngaynhap">
            </div>

            <div class="row mb10">
                Mã loại <br>
                <input type="number" name="maloai">
            </div>

            <div class="row mb10">
                Số lượt xem <br>
                <input type="number" name="soluotxem">
            </div>

            <div class="row mb10">
                Mô tả <br>
                <textarea name="mota" id="" cols="30" rows="10"></textarea>
            </div>

            <div class="row mb10">
                <input type="submit" name="themmoi" value="Thêm Mới">
                <input type="reset" value="Nhập Lại">
                <a href="index.php?act=listhh"><input type="button" value="Danh Sách"></a>
            </div>
            <?php 
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </form>
    </div>
</div>