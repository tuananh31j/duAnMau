<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/view.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

</head>

<body class="">
    <div class="container-fuild  ">

        <div class="row m-3 ">
            <div class="col-3 text-start bg-dark rounded pb-5 ps-2 pt-3 ">

                <header id="sideleft_ad" class="pb-5">
                    <!-- title -->
                    <div class="title-header">
                        <a class="nav-link active" aria-current="page" href="index.php">
                            <h1 class="text-light pb-5">Trang quản trị</h1>
                        </a>
                    </div>

                    <!-- menu -->
                    <ul class="nav flex-column pb-5">
                        <div><a class="nav-link  text-warning" href="../index.php">
                                <h5>Trang người dùng</h5><span class="fa-solid fa-arrow-right text-warning"></span>
                            </a></div>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?act=listLH">Loại hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?act=listHH">Hàng hóa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?act=listKH">Khách hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?act=listCMT">Bình luận</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-info" id="TK">Thống kê</a>
                            <ul id="nav__thongKe" class="d-none nav flex-column pb-5">

                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?act=thongKe&name=LH">Thông kê loại hàng</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?act=thongKe&name=HH">Thông kê hàng hóa</a>
                                </li>


                            </ul>
                        </li>
                    </ul>
                </header>
            </div>