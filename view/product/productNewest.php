<!-- product newest -->
<div class="product-new">
    <div class="title">
        <h3>Sản phẩm mới nhất</h3>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
                            foreach($newProduct as $product) {

                            
                            ?>

        <a href="index.php?act=detailsSP&id=<?php echo $product['maHangHoa'] ?>">
            <div class="col">
                <div class="card h-100">
                    <img src="img/<?php echo $product['anh']?>" class="card-img-top"
                        alt="<?php echo $product['tenHangHoa']?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product['tenHangHoa']?></h5>
                        <p class="card-text"><?php echo $product['moTa']?></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary"><?php echo $product['ngayNhap']?>|<span id="sale">sale:
                                <?php echo $product['giamGia'] ?></span></small>
                    </div>
                </div>
            </div>
        </a>

        <?php
                        }
                            ?>


    </div>
</div>