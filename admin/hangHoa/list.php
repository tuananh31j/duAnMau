<!-- main content -->
<div class="col mt-5 text-center">
    <h1>Danh sách hàng hóa:</h1>
    <div class="list_lh mt-5">
        <?php if(isset($err) && $err != '') { ?>

        <p><?php echo $err ?></p>

        <?php } ?>
        <table id="table" class="table table-striped">
            <thead class="bg-success">
                <tr>
                    <td>Chọn</td>
                    <td id="maHangHoa">Mã</td>
                    <td>Tên</td>
                    <td id="donGia">giá</td>
                    <td>Ảnh</td>
                    <td>Ngày Nhập</td>
                    <td>Đặc biệt</td>
                    <td>Mô tả</td>
                    <td>Giảm giá</td>
                    <td>Loại</td>
                    <td id="soLuotXem">View</td>
                    <td class="bg-danger">Chức năng nhanh</td>
                </tr>
            </thead>
            <tbody>
                <form action="index.php?act=deleteHH" method="post">
                    <?php foreach($danhsachHH as $ds) { ?>
                    <tr>
                        <td><input type="checkbox" name="box[]" value="<?php echo $ds["maHangHoa"] ?>" id=""></td>
                        <td><?php echo $ds["maHangHoa"] ?></td>
                        <td><?php echo $ds["tenHangHoa"] ?></td>
                        <td><?php echo $ds["donGia"] ?></td>
                        <td><?php echo $ds["anh"] ?></td>
                        <td><?php echo $ds["ngayNhap"] ?></td>
                        <td><?php echo $ds["dacBiet"] ?></td>
                        <td><?php echo $ds["moTa"] ?></td>
                        <td><?php echo $ds["giamGia"] ?></td>
                        <td><?php echo $ds["tenLoai"] ?></td>
                        <td><?php echo $ds["soLuotXem"] ?></td>
                        <td><a href="index.php?act=updateHH&id=<?php echo $ds['maHangHoa'] ?>">Sửa</a>|
                            <a href="index.php?act=deleteHH&id=<?php echo $ds['maHangHoa'] ?>">Xóa</a>
                        </td>
                    </tr>
                    <?php } ?>
                    <div>
                        <!-- chọn all -->
                        <button id="btn_Check_All" type="button" class="btn btn-primary">(chọn/bỏ) tất cả</button>
                        <!-- xóa all -->
                        <button onclick="return noti_delete_all()" type="submit"
                            class="btn btn-danger  btn_Delete_All opacity-25">Xóa</button>
                        <!-- mới nhất -->
                        <a onclick="setColor(maHangHoa)" id="btn_DECS" href="index.php?act=listHH&btn=btn_DESC"
                            class="btn btn-success">Hàng hóa mới nhất</a>
                        <!-- cũ nhất -->
                        <a onclick="setColor(maHangHoa)" href="index.php?act=listHH&btn=btn_ASC"
                            class="btn btn-secondary ">Hàng hóa cũ nhất</a>
                        <!-- lượt xem nhiều nhât -->
                        <a onclick="setColor(soLuotXem)" href="index.php?act=listHH&btn=btn_view_DESC" type="button"
                            class="btn btn-warning">Nhiều lượt xem nhất</a>
                        <!-- đơn giá cao nhất -->
                        <a onclick="setColor(donGia)" href="index.php?act=listHH&btn=btn_price_DESC" type="button"
                            class="btn btn-info">Đơn giá cao nhất</a>
                        <!-- thêm -->
                        <a href="index.php?act=addHH" class="btn btn-success">Thêm</a>
                    </div>
                </form>
            </tbody>
        </table>


    </div>
</div>

</div>
</div>