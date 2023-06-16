<!-- main content -->
<div class="col mt-5">
    <div class="mt5">
        <div class="text-center mb-4">
            <h2>Chi tiết bình luận</h2>
            <h5><span class="fs-6 fw-normal">Nội dung bình luận: </span><i
                    class="bg-info"><?php echo $targetCMT['ndCMT'] ?></i></h5>
            <p><i>ngày bình luận: <?php echo $targetCMT['dateCMT'] ?></i></p>
        </div>

        <div class="row">


            <div class="details col">
                <h3>Sản phẩm</h3>
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img id="img-detail" src="../img/<?php echo $targetCMT['anhHH']?>"
                                class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title"><?php  echo $targetCMT['nameHH'] ?></h4>
                                <p class="card-text"><?php echo $targetCMT['moTaHH'] ?></p>
                                <h6 class="text-warning"><?php echo $targetCMT['priceHH'] ?></h6>
                                <p class="card-text"><small
                                        class="text-body-secondary"><?php echo $targetCMT['dateHH'] ?></small>
                                </p>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <h3>Người dùng</h3>
                <div class=" col">
                    <div class=" mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img id="img-detail" src="../img/<?php echo $targetCMT['anhKH']?>"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8 ms-2">
                                <div class="card-body">
                                    <h4 class="card-title">Người bình luận: <span
                                            class="bg-info"><?php  echo $targetCMT['nameKH'] ?></span></h4>
                                    <p class="card-text">Email: <?php echo $targetCMT['emailKH'] ?></p>
                                    <h6 class="text-warning">Vai trò:
                                        <?php echo $targetCMT['vaiTroKH'] = 1?'Admin':'Member' ?></h6>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-success "><a class="text-light" id="lh" href="index.php?act=listCMT">Danh
                sách</a></button>

    </div>
</div>

</div>
</div>