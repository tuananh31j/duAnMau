<!-- top 10 sản phẩm yêu thích nhất  -->
<div class="favorite-product">
    <div class="title">
        <h3>Top 10 sản phẩm yêu thích nhất</h3>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
                        foreach($top10LuotXem as $product) {

                        
                        ?>

        <a
            href="index.php?act=detailsSP&id=<?php echo $product['maHangHoa'] ?>&luotXem=<?php echo $product['soLuotXem'] + 1; ?>">
            <div class="col">
                <div style="height: 900px;" class="card">
                    <p class="bg-danger text-light">Lượt xem: <?php echo $product['soLuotXem'] ?></p>
                    <img class="h-50" src="img/<?php echo $product['anh']?>" class="card-img-top"
                        alt="<?php echo $product['tenHangHoa']?>">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $product['tenHangHoa']?></h4>
                        <h5 class=" text-warning"><?php echo $product['donGia']?>VNĐ</h5>
                        <p class="card-text"><?php echo $product['moTa']?>...xem thêm</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary"><?php echo $product['ngayNhap']?>|<?php if($product['giamGia'] > 1){
                            echo '<span id="sale">sale: '.$product["giamGia"] ;
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