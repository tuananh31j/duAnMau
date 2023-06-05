<div class="bg-success-subtle me-3 ">
    <!-- account -->
    <div>
        <h3 class="text-center " id="acc">Tài Khoản</h3>
        <div id="acchide" class="acsount-box ">

            <p class="text-center" id="noti"><?php  echo isset($noti)?$noti:''; ?></p>
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
        <br>
        <hr>
        <br>
    </div>
    <!-- list loai hang -->
    <h3 class="text-center">Danh mục</h3>

    <?php include "listLH/list.php"; ?>
</div>
<script>
let acc = document.getElementById('acc');
let acchide = document.getElementById('acchide');
acc.addEventListener('click', function() {
    acchide.classList.toggle('accContent')
})
</script>