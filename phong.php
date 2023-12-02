<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên Hệ</title>
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

    <div class="container">
        <div class="row ">

            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4">
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
                                <h5 class="mb-3" style="font-size: 18px;">Cơ sở Dịch Vụ</h5>

                                <div class="mb2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f1">Tiện ích 1 </label>
                                </div>

                                <div class="mb2">
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f2">Tiện ích 2 </label>
                                </div>

                                <div class="mb2">
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f3">Tiện ích 3 </label>
                                </div>
                            </div>

                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">Người ở : </h5>
                                <div class="d-flex">
                                    <div class="mb-3">
                                        <label class="form-label">Người lớn</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Trẻ em</label>
                                        <input type="number" class="form-control shadow-none">
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
                        // truy vấn csdl
                        $phongQuery = "SELECT * FROM `phong`";
                        $phongResult = mysqli_query($conn, $phongQuery);

                        // xuat phong voi mysqli_fetch_assoc 
                        while ($row = mysqli_fetch_assoc($phongResult)) {
                            echo '<div class="card mb-4 border-0 shadow">';
                            echo '<div class="row g-0 align-items-center">';

                            echo '<div class="col-md-5 ">';
                            echo '<img class="img-fluid roundeds"  src="' . $row['image'] . '">';
                            echo '</div>';

                            echo '<div class="col-md-5 ">';
                            echo '<h5 class="mb-3">' . $row['name'] . '</h5>';
                            echo '<h6 class="mb-3">' . $row['loaiphong_id'] . '</h6>';

                            echo '<div class="features mb-4">';
                            echo '<h6 class="mb-1">ALL Nội Thất</h6>';
                            echo ' <span class="badge rounded-pill bg-light text-dark texr-wrap">2 Giường</span>';
                            echo ' <span class="badge rounded-pill bg-light text-dark texr-wrap">1 cửa xổ </span>';
                            echo '<span class="badge rounded-pill bg-light text-dark texr-wrap">1 Ban công</span>';
                            echo '<span class="badge rounded-pill bg-light text-dark texr-wrap">3 Ghế</span>';
                            echo '</div>';

                            echo '<div class="features2 mb-4">';
                            echo ' <h6 class="mb-1">ALL Dịch Vụ</h6>';
                            echo '<span class="badge rounded-pill bg-light text-dark texr-wrap">' . $row['dichvu'] . '</span>';

                            echo '</div>';

                            echo '<div class="songuoi mb-4">';
                            echo '<h6 class="mb-1">ALL Số người</h6>';
                            echo '<span class="badge rounded-pill bg-light text-dark texr-wrap">4 người lớn</span>';
                            echo ' <span class="badge rounded-pill bg-light text-dark texr-wrap">2 trẻ em</span>';
                            echo ' </div>';
                            echo '<div class="songuoi mb-4">';
                            echo '<h6 class="mb-1">Mô tả:</h6>';
                            echo '<p>x' . $row['mota'] . '</p>';

                            echo '</div>';
                            echo '<div class="row">';
                            echo '<div class="col-md-6 text-center">';
                            echo '<h5 class="mb-4">' . $row['gia'] . 'VND/Đêm</h5>';
                            echo '</div>';
                            echo '<div class="col-md-6 text-center">';
                            echo '<h6 class="mb-4">' . $row['trangthai'] . '</h6>';
                            echo '</div>';
                            echo '</div>';
                            echo '<a href="#" name="booking" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Đặt Ngay</a>';
                            echo '<a href="#" name="chitiet" class="btn btn-sm w-100 btn-outline-dark shadow-none mb-2">Xem chi tiết</a>';

                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }



                        ?>
                    </div>
                </div>



            </div>
            <!-- end form xuat phong-->


        </div>
    </div>

    <?php require "./inc/footer.php" ?>

</body>

</html>