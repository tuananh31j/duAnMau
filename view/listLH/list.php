<div class="bg-success-subtle me-3  p-2 ">
    <div class="nav flex-column nav-pills me-3" id="menu2" role="tablist" aria-orientation="vertical">

        <a href="index.php?act=product">Mới nhất</a>
        <?php
                        foreach($dataLH as $lH) {       
                        ?>
        <a href="index.php?act=product&id=<?php echo $lH['maLoai'] ?>"><?php echo $lH['tenLoai'] ?></a>
        <?php
                        }
                    ?>
    </div>
</div>