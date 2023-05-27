<div class="list_lh">
    <table>
        <thead>
            <tr>
                <td>Mã loại</td>
                <td>Tên loại</td>
                <td>Chức năng</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($danhsachlh as $ds) {
                
            
            ?>
            <tr>
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
</div>