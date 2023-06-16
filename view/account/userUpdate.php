<div class="mb-5">

    <h1 class="text-center mt-4">Cập nhật thông tin cá nhân</h1>
    <div class="text-center m-4">
        <img class="user-img" src="img/<?php echo $_SESSION['user']['anh'] ?>" alt="">
        <br>
        <?php  echo isset($noti)?'<p class= "fs-3 text-danger">'.$noti.'</p>':"" ?>
    </div>
    <div class="container">
        <form action="index.php?act=userUpdate" enctype="multipart/form-data" method="post">
            <input type="text" name="maKhachHang" hidden value="<?php echo $_SESSION['user']['maKhachHang'] ?>">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" name="email" value="<?php echo $_SESSION['user']['email'] ?>" class="form-control"
                    id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tên người dùng</label>
                <input type="text" name="tenKhachHang" value="<?php echo $_SESSION['user']['tenKhachHang'] ?>"
                    class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="matKhau" value="<?php echo $_SESSION['user']['matKhau'] ?>"
                    class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ảnh đại diện</label>
                <input type="file" name="anh" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>

            <button onclick="noti_update_ac()" type="submit" name="btn-userUpdate" class="btn btn-primary">Cập
                nhật</button>
            <button type="reset" class="btn btn-success">Nhập lại</button>
            <a class="ps-3" href="index.php">Quay về trang chủ.<i class="fa-solid fa-arrow-right"></i></a>
        </form>

    </div>

</div>