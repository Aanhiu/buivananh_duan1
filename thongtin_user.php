<?php

//đăng xuất
if(isset($_POST['dangxuat'])) {
    session_start();
    session_destroy(); // Xóa tất cả session
    header("Location: index.php"); // Chuyển hướng người dùng về trang chủ
    exit;
}
// ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Tin Người Dùng </title>
    <?php require "./inc/link.php" ?>
</head>

<body class="gb-light">
    <?php require "./inc/header.php" ?>
    <!-- sile ảnh -->
    <div class="container-fluid px-lg-4 mt-4 ">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="pulic/images/carousel/1.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="pulic/images/carousel/2.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="pulic/images/carousel/3.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="pulic/images/carousel/4.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="pulic/images/carousel/5.png" class="w-100 d-block" />
                </div>
            </div>

        </div>
    </div>
    <!-- end sile ảnh -->

    <!-- phong trang chủ-->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Chức năng của trang website</h2>
    <div class="col-lg-2 bg-warning border-top border-3 border-secondary" id="dashboard-menu" style="height: 800px;">

        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid flex-lg-column align-items-stretch">
                <h1 class="mt-2 text-light ">Chức năng </h1>
                <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#loc" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="loc">

                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <h3> <a class="nav-link" href="#">Tổng quan</a></h3>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="/admin/index.php">Đăng Nhập vào Admin</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="">Thông tin tài khoản</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="">Danh sách đặt phòng</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="">Lịch sử đặt phòng</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="">Các bình luận đã viết</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="phong.php">Xem thêm phòng</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="index.php">Về trang chủ</a>
                        </li>

                        <form  method="post">
                            <button type="submit" name="dangxuat" class="btn btn-outline-dark shadow-none me-lg-3 me-2">
                                Đăng Xuất
                            </button>
                        </form>
                    </ul>
                </div>
        </nav>
    </div>

    <?php require "./inc/footer.php" ?>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script src="./pulic/js/sile_header.js"></script>
<script src="./pulic/js/chuyen_anh.js"></script>

</html>