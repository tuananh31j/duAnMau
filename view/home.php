  <!-- slideshow -->





  </header>


  <!-- main content -->
  <div class="main-content">
      <!-- product -->
      <!-- main -->
      <main class="home">

          <div class="d-flex align-items-start">
              <!-- danh mục -->
              <div>
                  <!-- account -->
                  <div>
                      <div class="acsount-box">
                          <h3>Tài Khoản</h3>
                          <?php
                         if(isset($_SESSION['user'])) {
                            
                         
                         ?>
                          <a href="index.php?act=quenMatKhau">Quên mật khẩu</a><br><br>
                          <a href="admin/">Trang Quản trị</a><br><br>
                          <a href="">Đăng xuất</a>
                          <?php }else{ ?>
                          <div>
                              <form action="index.php?act=dangNhap" method="post">
                                  <label for="username">Tên tài khoản</label>
                                  <input type="text" name="tenKhachHang">
                                  <label for="password">Tên tài khoản</label>
                                  <input type="text" name="matKhau">
                                  <input type="submit" name="btn-dN" value="Đăng nhập">
                              </form>
                              <a href="index.php?act=dangKy">Đăng ký tài khoản</a><br><br>
                              <a href="index.php?act=quenMatKhau">Quên mật khẩu</a>
                          </div>
                          <?php } ?>
                      </div>
                  </div>

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

              </div>

              <!-- product -->
              <div>
                  <!-- slideshow -->
                  <div id="carouselExampleDark" class="carousel carousel-dark slide">
                      <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                              class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                              aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                              aria-label="Slide 3"></button>
                      </div>
                      <div class="carousel-inner">
                          <div class="carousel-item active" data-bs-interval="10000">
                              <img src="img/banner1.jpg" class="d-block w-100" alt="...">
                              <div class="carousel-caption d-none d-md-block">
                                  <h5>First slide label</h5>
                                  <p>Some representative placeholder content for the first slide.</p>
                              </div>
                          </div>
                          <div class="carousel-item" data-bs-interval="2000">
                              <img src="img/banner2.jpg" class="d-block w-100" alt="...">
                              <div class="carousel-caption d-none d-md-block">
                                  <h5>Second slide label</h5>
                                  <p>Some representative placeholder content for the second slide.</p>
                              </div>
                          </div>
                          <div class="carousel-item">
                              <img src="img/banner3.jpg" class="d-block w-100" alt="...">
                              <div class="carousel-caption d-none d-md-block">
                                  <h5>Third slide label</h5>
                                  <p>Some representative placeholder content for the third slide.</p>
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
                                          <h5 class="card-title"><?php echo $product['tenHangHoa']?> |<span
                                                  id="sale">Giảm
                                                  giá:
                                                  <?php echo $product['giamGia'] ?></span></h5>
                                          <p class="card-text"><?php echo $product['moTa']?></p>
                                      </div>
                                      <div class="card-footer">
                                          <small class="text-body-secondary"><?php echo $product['ngayNhap']?></small>
                                      </div>
                                  </div>
                              </div>
                          </a>

                          <?php
              }
                ?>


                      </div>
                  </div>

                  <!-- top 10 sản phẩm yêu thích nhất  -->
                  <div class="favorite-product">
                      <div class="title">
                          <h3>Top 10 sản phẩm yêu thích nhất</h3>
                      </div>
                      <div class="row row-cols-1 row-cols-md-3 g-4">
                          <?php
              foreach($newProduct as $product) {

               
              ?>


                          <div class="col">
                              <div class="card h-100">
                                  <img src="img/<?php echo $product['anh']?>" class="card-img-top"
                                      alt="<?php echo $product['tenHangHoa']?>">
                                  <div class="card-body">
                                      <h5 class="card-title"><?php echo $product['tenHangHoa']?></h5>
                                      <p class="card-text"><?php echo $product['moTa']?></p>
                                  </div>
                                  <div class="card-footer">
                                      <small class="text-body-secondary"><?php echo $product['ngayNhap']?></small>
                                  </div>
                              </div>
                          </div>
                          <?php
              }
                ?>


                      </div>
                  </div>
              </div>
          </div>

      </main>





  </div>