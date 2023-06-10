<!-- main content -->
<div class="col mt-5 text-center">
    <h1>Bảng thống kê: hàng hóa</h1>
    <div class="list_lh mt-5">

        <table id="table" class="table table-striped">
            <thead class="bg-success">
                <tr>

                    <td>Mã hàng hóa</td>
                    <td>Tên hàng hóa</td>
                    <td>Loại</td>
                    <td>Số lượng bình luận</td>
                    <td>Lượt xem</td>

                </tr>


            </thead>
            <tbody>
                <?php
            foreach($danhsachTKHH as $ds) {
                
            
            ?>
                <tr>

                    <td><?php echo $ds["mHangHoa"] ?></td>
                    <td><?php echo $ds["tHangHoa"] ?></td>
                    <td><?php echo $ds["tLoai"] ?></td>
                    <td><?php echo $ds["slBL"] ?></td>
                    <td><?php echo $ds["view"] ?></td>
                </tr>
                <?php
            }
            ?>
                <div>
                    <a href="index.php?act=chartHH" class="btn btn-dark">Chi tiết biểu đồ</a>
                </div>

            </tbody>
        </table>


    </div>
</div>

</div>
</div>