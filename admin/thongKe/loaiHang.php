<!-- main content -->
<div class="col mt-5 text-center">
    <h1>Bảng thống kê: Loại hàng</h1>
    <div class="list_lh mt-5">

        <table id="table" class="table table-striped">
            <thead class="bg-success">
                <tr>

                    <td>Mã hàng hóa</td>
                    <td>Tên hàng hóa</td>
                    <td>Số lượng sản phẩm</td>
                    <td>Giá lớn nhất</td>
                    <td>Giá thấp nhất</td>
                    <td>Giá trung bình</td>
                </tr>


            </thead>
            <tbody>
                <?php
            foreach($danhsachTKLH as $ds) {
                
            
            ?>
                <tr>

                    <td><?php echo $ds["mLoai"] ?></td>
                    <td><?php echo $ds["tLoai"] ?></td>
                    <td><?php echo $ds["slHH"] ?></td>
                    <td><?php echo $ds["maxHH"] ?></td>
                    <td><?php echo $ds["minHH"] ?></td>
                    <td><?php echo $ds["tbHH"] ?></td>
                </tr>
                <?php
            }
            ?>
                <div>
                    <a href="index.php?act=chartLH" class="btn btn-dark">Chi tiết biểu đồ</a>
                </div>

            </tbody>
        </table>


    </div>
</div>

</div>
</div>