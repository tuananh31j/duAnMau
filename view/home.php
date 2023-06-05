<!-- main content -->
<div class="main-content">
    <!-- product -->
    <!-- main -->
    <main class="home">

        <div class="d-flex align-items-start">
            <!-- danh mục và tài khoản -->
            <?php include "sideLeft.php"; ?>

            <!-- product -->
            <div>
                <!-- slideshow -->
                <div id="carouselExampleDark" class="carousel carousel-dark slide ">

                    <div class="carousel-inner" data-bs-ride="carousel">
                        <div class="carousel-item active" data-bs-interval="1000">
                            <img src="img/banner1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Xphone</h5>
                                <p>Camera siêu nét thỏa sức sáng tạo</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="img/banner2.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Xphone</h5>
                                <p>Camera siêu nét thỏa sức sáng tạo</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="img/banner3.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Xphone</h5>
                                <p>Camera siêu nét thỏa sức sáng tạo</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>


                <?php
                  include "product/productNewest.php";
                  include "product/top10Product.php";
                  ?>


            </div>
        </div>

    </main>





</div>