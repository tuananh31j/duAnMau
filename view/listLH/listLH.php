</header>


<!-- main content -->
<div class="main-content">
    <!-- danh mục -->
    <!-- main -->
    <main class="listLH">
        <div class="side-left">
            <!-- phần danh mục -->
            <div class="d-flex align-items-start">
                <div class="nav flex-column nav-pills me-3" id="menu2" role="tablist" aria-orientation="vertical">
                    <a href="index.php?act=listLH">Mới nhất</a>

                    <?php
                        foreach($dataLH as $lH) {

                        
                        ?>
                    <a href="index.php?act=listLH&id=<?php echo $lH['maLoai'] ?>"><?php echo $lH['tenLoai'] ?></a>
                    <?php
                        }
                    ?>
                </div>

                <!-- hàng hóa thuộc danh mục đó -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="row row-cols-1 row-cols-md-3 g-4">

                        <?php
                    foreach($targetSP as $sP) {

                    
                    ?>

                        <a href="index.php?act=detailsSP&id=<?php echo $sP['maHangHoa'] ?>">
                            <div class="col">
                                <div class="card h-100">
                                    <img src="img/<?php echo $sP['anh'] ?>" class="card-img-top"
                                        alt="<?php echo $sP['tenHangHoa'] ?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $sP['tenHangHoa'] ?> |<span id="sale">Giảm
                                                giá:
                                                <?php echo $sP['giamGia'] ?></span></h5>
                                        <p class="card-text"><?php echo $sP['moTa'] ?></p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-body-secondary"><?php echo $sP['ngayNhap'] ?></small>
                                    </div>
                                </div>


                            </div>
                        </a>
                        <?php
                    }
                        ?>
                    </div>

                </div>
            </div>
        </div>
</div>
</main>




</div>