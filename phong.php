<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phòng của khách sạn </title>
    <?php require "./inc/link.php" ?>
</head>
<style>
    .room img {
        width: 100%;
        height: auto;
    }

    .room h2 {
        color: #333;
        font-size: 1.5em;
    }

    .room p {
        color: #666;
        font-size: 1em;
    }

    .room {
        margin-bottom: 20px;
    }
</style>

<body class="gb-light">
    <?php require "./inc/header.php" ?>
    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Các phòng Sang Trọng của khách sạn</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Repellat, atque rerum deleniti rem odit animi accusantium.
        </p>
    </div>

    <div class="container-fluid">
        <div class="row ">

            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 ps-4">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">Bộ Lọc</h4>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#loc" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="loc">
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">Kiểm tra phòng có và đặt ngày :</h5>
                                <label for="" class="form-label">Ngày đi</label>
                                <input type="date" class="form-control shadow-none">
                                <label for="" class="form-label">Ngày đến</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">Người ở : </h5>
                                <div class="d-flex">
                                    <div class="mb-3">
                                        <label class="form-label">Người lớn 2</label>
                                    </div>
                                    <div>
                                        <label class="form-label">Trẻ em 2</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                </nav>

            </div>
            <!-- bat dau form xuat phong-->
            <div class="col-lg-9 col-md-12 px-4">

                <div class="container mt-4">
                    <div class="row">
                        <?php

                        require_once "/buivananh_duan1/admin/inc/db_config.php";
                        // truy vấn csdl // thuc hien INNER JOIN hien ten phong chứ ko phải hiện id as gia dinh 1 cot moi chua ten cua loai phong và dùng nó chưa tên loai phòng để xuất tên loại phòng
                        $phongQuery = "SELECT  phong.*, loai_phong.name AS ten_loai_phong FROM phong INNER JOIN loai_phong ON phong.loaiphong_id = loai_phong.id";
                        // thực hiện gắn truy vấn gắn báo biến khởi tạo $phongResult
                        //mysqli_query có tác dụng trả về tập hợp dữ liệu chứa nhiều hàng dữ liệu kết hơp với mysqli_fetch_assoc lấy từng hàng dữ liệu lấy trong mysqli_query là tập hợp chứa nhiều dữ liệu 
                        $phongResult = mysqli_query($conn, $phongQuery);

                        // xuat phong voi mysqli_fetch_assoc // tác dụng của  mysqli_fetch_assoc là lấy từng hàng dữ liệu khi kết hợp với mysqli_query là tập hợp chưá nhiều dữ liệu 
                        //mysqli_query va mysqli_fetch_assoc làm việc với nhau 
                        while ($row = mysqli_fetch_assoc($phongResult)) {
                            //echo '<div class="card mb-4 border-0 shadow">';
                            echo '<div class="row g-0 align-items-center">';

                            echo '<div class="col-md-5 ">';
                            echo '<img class="img-fluid roundeds"  src="' . $row['image'] . '" alt="Ảnh đang bị lỗi fix sau">' ;
                            echo '</div>';

                            echo '<div class="col-md-5 ">';
                            echo '<h5 class="mb-3">Tên Phòng :' . $row['name'] . '</h5>';
                            echo '<h6 class="mb-3"> Lọai Phòng : ' . $row['ten_loai_phong'] . '</h6>';

                            echo '<div class="features mb-4">';
                            echo '<h6 class="mb-1">Nội Thất :</h6>';
                            echo ' <span class="badge rounded-pill bg-light text-dark texr-wrap"> Giường</span>';
                            echo '<span class="badge rounded-pill bg-light text-dark texr-wrap">Điện Thoại Bàn</span>';
                            echo '<span class="badge rounded-pill bg-light text-dark texr-wrap">Điều Hòa</span>';
                            echo ' <span class="badge rounded-pill bg-light text-dark texr-wrap">cửa xổ </span>';
                            echo '<span class="badge rounded-pill bg-light text-dark texr-wrap">1 Phòng Tắm</span>';
                            echo '<span class="badge rounded-pill bg-light text-dark texr-wrap">1 Vệ Sinh</span>';
                            echo '<span class="badge rounded-pill bg-light text-dark texr-wrap">Ghế</span>';
                            echo '</div>';

                            echo '<div class="features2 mb-4">';
                            echo ' <h6 class="mb-1">Dịch Vụ :</h6>';
                            echo '<span class="badge rounded-pill bg-light text-dark texr-wrap">' . $row['dichvu'] . '</span>';

                            echo '</div>';

                            echo '<div class="songuoi mb-4">';
                            echo '<h6 class="mb-1">Số người có thể chứa :</h6>';
                            echo '<span class="badge rounded-pill bg-light text-dark texr-wrap">2 người lớn</span>';
                            echo ' <span class="badge rounded-pill bg-light text-dark texr-wrap">2 trẻ em</span>';


                            echo ' <div class="features2 mb-4">';
                            echo ' <h6 class="mb-1">Đánh giá</h6>';
                            echo ' <span class="badge rounded-pill bg-light ">';
                            echo '  <i class="bi bi-star-fill text-warning"></i>';
                            echo '  <i class="bi bi-star-fill text-warning"></i>';
                            echo ' <i class="bi bi-star-fill text-warning"></i>';
                            echo '  <i class="bi bi-star-fill text-warning"></i>';
                            echo ' <i class="bi bi-star-fill text-warning"></i>';
                            echo ' </span>';
                            echo '</div>';

                            echo '<div class="row">';
                            echo '<div class="col-md-6 text-center">';
                            echo '<h5 class="mb-4">' . number_format($row['gia'], 0, '.', ',') . ' VND/Đêm</h5>';
                            echo '</div>';
                            echo '<div class="col-md-6 text-center">';
                            echo '<h6 class="mb-4">' . $row['trangthai'] . '</h6>';
                            echo '</div>';
                            echo '</div>';
                            echo '<a href="#" name="booking" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Đặt Ngay</a>';
                            echo '<a href="#" name="chitiet" class="btn btn-sm w-100 btn-outline-dark shadow-none mb-2">Xem chi tiết</a>';

                            echo '</div>';
                            
                             echo '</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <!-- end form xuat phong-->
    </div>
    </div>
    
    
   

<?php require "./inc/footer.php" ?>
</body>

</html>