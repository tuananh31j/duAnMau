<div>
    <!-- account -->
    <div>
        <div class="acsount-box">
            <h3>Tài Khoản</h3>
            <?php
                         if(isset($_SESSION['user'])) {
                            $userImage = $_SESSION['user']['anh'];
                            $userName = $_SESSION['user']['tenKhachHang'];

                         include "account/user.php";
                         }else{ 
                            include "account/dangNhap.php";
                          }
                         ?>






        </div>
    </div>
    <!-- list loai hang -->
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