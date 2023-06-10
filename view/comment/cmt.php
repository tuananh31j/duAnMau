<?php
session_start();
include "../../model/pdo.php";

$idHH= $_GET['idHH'];
$sql = "select * from binhLuan inner join khachHang on khachHang.maKhachHang = binhLuan.maKhachHang  where maHangHoa = ?";

$listCMT = pdo_query($sql, $idHH);


 ?>
<?php
if(isset($_POST['btn-cmt']) && isset($_SESSION['user'])) {
    $noiDung = $_POST['noiDung'];
    $maHangHoa = $idHH;
    $ngayBinhLuan = date("Y-m-d");
    $maKhachHang = $_SESSION['user']['maKhachHang'];

    $sql = "insert into binhLuan(noiDung, ngayBinhLuan, maKhachHang, maHangHoa) values(?, ?, ?, ?)";

    pdo_execute($sql, $noiDung, $ngayBinhLuan, $maKhachHang, $maHangHoa);
    header("location: ".$_SERVER['HTTP_REFERER']);
}else{
    $noti = '<p id="noti" >Bạn phải đăng nhập để có thể bình luận!</p>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/view.css">

</head>

<body>
    <div id="cmt">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <input type="text" name="maHangHoa" hidden value="<?php echo $idHH ?>">
            <input type="text" placeholder="Nhập nội dung" name="noiDung">
            <input type="submit" name="btn-cmt" value="Gửi">

        </form>
    </div>

    <nav class="nav flex-column ">
        <ul>
            <?php foreach($listCMT as $cmt) {
                if($cmt['vaiTro'] == 0){


             ?>
            <li class="nav-link active" aria-current="page">
                <div><img class="cmt-img" src="../../img/<?php echo $cmt['anh'] ?>" alt="">
                    <span class="cmt-per"><?php echo $cmt['tenKhachHang'] ?>: <span
                            class="cmt-content"><?php echo $cmt['noiDung'] ?></span></span>
                </div>
                <p><?php echo $cmt['ngayBinhLuan'] ?></p>
            </li>

            <?php }else{
?>
            <li class="nav-link active" aria-current="page">
                <i>quản trị viên</i><br>
                <img class="cmt-img" src="../../img/<?php echo $cmt['anh'] ?>" alt="">

                <span class="cmt-perAD"><?php echo $cmt['tenKhachHang'] ?>: <span
                        class="cmt-content"><?php echo $cmt['noiDung'] ?></span></span>

                <p><?php echo $cmt['ngayBinhLuan'] ?></p>
            </li>
            <?php } } ?>
        </ul>

    </nav>


</body>

</html>