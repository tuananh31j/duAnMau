<?php

?>
<!-- main content -->


<div class="main-content">
    <!-- product -->
    <!-- main -->
    <main class="home">

        <div class="d-flex align-items-start">
            <!-- danh mục và tài khoản -->
            <?php include "view/sideLeft.php"; ?>

            <!-- product -->

            <!-- hàng hóa thuộc danh mục đó -->
            <div>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="text-center m-5">
                        <?php
                        if(isset($targetLH)) {

                         ?>
                        <h3>Các sản phầm có cùng loại là: <span id="hint"><?php echo $targetLH['tenLoai'] ?></span>
                        </h3>
                        <?php }else{

                         ?>
                        <h3>Các sản phẩm mới nhất: </h3>
                        <?php } ?>
                    </div>



                </div>
                <div>
                    <div class="row row-cols-1 row-cols-md-3 g-4">


                        <?php
                        foreach($targetSP as $sP) {

                    
                        ?>

                        <a
                            href="index.php?act=detailsSP&id=<?php echo $sP['maHangHoa'] ?>&luotXem=<?php echo $sP['soLuotXem'] + 1; ?>">
                            <div class="col">
                                <div style="height: 900px;" class="card">
                                    <img class="h-50" src="img/<?php echo $sP['anh'] ?>" class="card-img-top"
                                        alt="<?php echo $sP['tenHangHoa'] ?>">
                                    <div class="card-body">
                                        <h4 class="card-title"><?php echo $sP['tenHangHoa'] ?> </h4>
                                        <h5 class=" text-warning"><?php echo $sP['donGia']?>VNĐ</h5>
                                        <p class="card-text"><?php echo $sP['moTa'] ?>...xem thêm</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-body-secondary"><?php echo $sP['ngayNhap'] ?>|<?php if($sP['giamGia'] > 1){
                            echo '<span id="sale">sale: '.$sP["giamGia"] ;
                        }else{
                            echo '';
                        } ?></span></small>
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