<div class="d-flex align-items-start">
    <?php

 include "view/sideLeft.php"; ?>
    <div>
        <!-- chi tien san pham -->
        <main class="details">
            <div class="card mb-3" style="max-width: 940px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img id="img-detail" src="img/t3.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?php  echo $targetSP_id['tenHangHoa'] ?></h5>
                            <p class="card-text"><?php echo $targetSP_id['moTa'] ?></p>
                            <p><?php echo $targetSP_id['donGia'] ?></p>
                            <p class="card-text"><small
                                    class="text-body-secondary"><?php echo $targetSP_id['ngayNhap'] ?></small>
                            </p>
                            <button>Thêm</button>

                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- bình luận -->
        <main class="cmt">
            <div class="title">
                <h3>Bình luận</h3>
            </div>
            <iframe src="view/comment/cmt.php?idHH=<?php echo $targetSP_id['maHangHoa'] ?>" width="950px" height="400px"
                frameborder="0"></iframe>

        </main>


        <!-- sản phẩm cùng loại -->
        <main class="similar-products">
            <div class="title">
                <h3>Sản phẩm cùng loại</h3>
            </div>

            <div class="container text-center">
                <div class="row row-cols-1 row-cols-md-5 g-4">

                    <?php
                            foreach($targetSP as $sp){

                            ?>
                    <div class="col">
                        <div class="card text-bg-dark">
                            <img src="img/t1.jpg" class="card-img" alt="img/t1.jpg">
                            <div class="card-img-overlay">
                                <h5 class="card-title"><?php echo $sp['tenHangHoa'] ?></h5>
                                <p class="card-text"><?php echo $sp['moTa'] ?></p>
                                <p class="card-text"><small><?php echo $sp['ngayNhap'] ?>|<span id="sale">sale:
                                            <?php echo $sP['giamGia'] ?></span></small></p>
                            </div>
                        </div>
                    </div>
                    <?php
                            }
                            ?>

                </div>

            </div>
        </main>

    </div>
    <div class="d-flex align-items-start">

    </div>



</div>