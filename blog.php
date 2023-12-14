<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài Viết</title>
    <?php require "./inc/link.php" ?>
    <style>
        /* Thêm CSS tại đây nếu cần */
    </style>
</head>

<body class="gb-light">
    <?php require "./inc/header.php" ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Các bài viết HOT</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Hãy lựa chọn đúng đắn cho bản thân khi quyết định đặt phòng khách sạn của chúng tôi qua những bài phê bình và đánh giá khách quan nhất của những người viết bài về khách sạn của chúng tôi.
        </p>
    </div>

    <div class="container">
        <div class="row">
            <!-- Bài viết 1 -->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/IMG_11892.png" class="card-img-top">
                    <!-- Phần thông tin bài viết -->
                    <div class="card-body">
                        <h4>Review cơ sở khách sạn</h4>
                        <h6 class="mb-4">Tác giả: Rose</h6>
                        <p class="mb-4">Với cơ sở tốt nhất ở mọi nơi trên Hà Nội, khách sạn luôn đi đôi.</p>
                        <div class="features mb-4">
                            <h6 class="mb-1">Lượt đọc:</h6>
                            <span class="badge rounded-pill bg-light text-dark texr-wrap">149 lượt đọc</span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Đánh giá</h6>
                            <span class="badge rounded-pill bg-light ">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="blogb1.php" class="btn btn-sm btn-outline-dark shadow-none">Đọc Bài Viết</a>
                        </div>
                    </div>
                    <!-- Kết thúc phần thông tin bài viết -->
                </div>
            </div>
            <!-- Kết thúc bài viết 1 -->

            <!-- Bài viết 2 -->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/IMG_70583.png" class="card-img-top">
                    <!-- Phần thông tin bài viết -->
                    <div class="card-body">
                        <h4>Review cơ sở khách sạn</h4>
                        <h6 class="mb-4">Tác giả: Sơn Tùng</h6>
                        <p class="mb-4">Với cơ sở có dịch vụ tốt nhất mà tôi từng trải nghiệm.</p>
                        <div class="features mb-4">
                            <h6 class="mb-1">Lượt đọc:</h6>
                            <span class="badge rounded-pill bg-light text-dark texr-wrap">149 lượt đọc</span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Đánh giá</h6>
                            <span class="badge rounded-pill bg-light ">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="blogb2.php" class="btn btn-sm btn-outline-dark shadow-none">Đọc Bài Viết</a>
                        </div>
                    </div>
                    <!-- Kết thúc phần thông tin bài viết -->
                </div>
            </div>
            <!-- Kết thúc bài viết 2 -->

             <!-- Bài viết 3 -->
             <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/IMG_65019.png" class="card-img-top">
                    <!-- Phần thông tin bài viết -->
                    <div class="card-body">
                        <h4>Review cơ sở khách sạn</h4>
                        <h6 class="mb-4">Tác giả: Sơn Tùng</h6>
                        <p class="mb-4">Với cơ sở có dịch vụ tốt nhất mà tôi từng trải nghiệm.</p>
                        <div class="features mb-4">
                            <h6 class="mb-1">Lượt đọc:</h6>
                            <span class="badge rounded-pill bg-light text-dark texr-wrap">149 lượt đọc</span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Đánh giá</h6>
                            <span class="badge rounded-pill bg-light ">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="blogb3.php" class="btn btn-sm btn-outline-dark shadow-none">Đọc Bài Viết</a>
                        </div>
                    </div>
                    <!-- Kết thúc phần thông tin bài viết -->
                </div>
            </div>
            <!-- Kết thúc bài viết 3 -->
        </div>
    </div>

    <?php require "./inc/footer.php" ?>
</body>

</html>
