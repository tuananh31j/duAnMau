<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/view.css">

</head>

<body>
    <div class="container-fluid">
        <header class="mb-3">
            <!-- menu -->
            <nav class="navbar navbar-expand-lg bg-success">
                <div class="container">
                    <a class="navbar-brand" href="#">Trang khách hàng</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="index.php?act=product">Sản phẩm</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="index.php?act=about">Giới thiệu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="index.php?act=contact">Liên hệ</a>
                            </li>

                        </ul>
                        <form class="d-flex" action="index.php?act=product" method="post">
                            <input class="form-control me-2" type="text" name="kw" placeholder="Nhập từ khóa"
                                aria-label="Search">
                            <button class="btn btn-btn-outline-light" name="btn-kw" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>

        </header>