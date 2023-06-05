<div class="list_lh">
    <?php if(isset($noti) && $noti != '') {

?>
    <p><?php echo $noti ?></p>
    <?php } 
?>
    <table>
        <thead>
            <th>
            <td>Chọn</td>
            <td>Mã loại</td>
            <td>Tên loại</td>
            <td>Chức năng</td>
            </th>
        </thead>
        <tbody>
            <?php
            foreach($danhsachlh as $ds) {
                
            
            ?>
            <tr>
                <td><input type="checkbox" name="box" value="<?php echo $ds["maLoai"] ?>" id=""></td>
                <td><?php echo $ds["maLoai"] ?></td>
                <td><?php echo $ds["tenLoai"] ?></td>
                <td><a href="index.php?act=updateLH&id=<?php echo $ds['maLoai'] ?>">Sửa</a>|
                    <a href="index.php?act=deleteLH&id=<?php echo $ds['maLoai'] ?>">Xóa</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <div>
        <button type="button" class="btn btn-primary">(chon/bỏ) tất cả</button>
        <button type="button" class="btn btn-secondary">Secondary</button>
        <button type="button" class="btn btn-success">Success</button>
        <button type="button" class="btn btn-danger">Danger</button>
        <button type="button" class="btn btn-warning">Warning</button>
        <button type="button" class="btn btn-info">Info</button>

        <button type="button" class="btn btn-dark">Dark</button>


    </div>

</div>