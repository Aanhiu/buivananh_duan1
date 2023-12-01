<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên Hệ</title>
    <?php require "./inc/link.php" ?>
</head>

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

            <div class="col-lg-9 col-md-12 px-4">
                <!-- xuat phong 1-->

                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 align-items-center">

                        <div class="col-md-5 ">
                            <img src="./pulic/images/rooms/IMG_42663.png" class="img-fluid roundeds">
                        </div>

                        <div class="col-md-5 ">
                            <h5 class="mb-3">Xuất tên phòng</h5>
                            <div class="features mb-4">
                                <h6 class="mb-1">Đặc Trưng</h6>
                                <span class="badge rounded-pill bg-light text-dark texr-wrap">2 Giường</span>
                                <span class="badge rounded-pill bg-light text-dark texr-wrap">1 cửa xổ </span>
                                <span class="badge rounded-pill bg-light text-dark texr-wrap">1 Ban công</span>
                                <span class="badge rounded-pill bg-light text-dark texr-wrap">3 Ghế</span>
                            </div>

                            <div class="features2 mb-4">
                                <h6 class="mb-1">Dịch Vụ</h6>
                                <span class="badge rounded-pill bg-light text-dark texr-wrap">Wifi</span>
                                <span class="badge rounded-pill bg-light text-dark texr-wrap">Khăn Tắm </span>
                                <span class="badge rounded-pill bg-light text-dark texr-wrap">Đồ cá nhân</span>
                                <span class="badge rounded-pill bg-light text-dark texr-wrap">Đồ uống free</span>
                            </div>

                            <div class="songuoi mb-4">
                                <h6 class="mb-1">Số người</h6>
                                <span class="badge rounded-pill bg-light text-dark texr-wrap">4 người lớn</span>
                                <span class="badge rounded-pill bg-light text-dark texr-wrap">2 trẻ em </span>
                            </div>
                            <h6 class="mb-4 text-center">500.000vnd /đêm</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Đặt Ngay</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none mb-2">Xem chi tiết</a>

                        </div>

                    </div>

                </div>
                <!-- xuat phong 2-->
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 align-items-center">

                        <div class="col-md-5 ">
                            <img src="./pulic/images/rooms/IMG_42663.png" class="img-fluid roundeds">
                        </div>

                        <div class="col-md-5 ">
                            <h5 class="mb-3">Xuất tên phòng</h5>
                            <div class="features mb-4">
                                <h6 class="mb-1">Đặc Trưng</h6>
                                <span class="badge rounded-pill bg-light text-dark texr-wrap">2 Giường</span>
                                <span class="badge rounded-pill bg-light text-dark texr-wrap">1 cửa xổ </span>
                                <span class="badge rounded-pill bg-light text-dark texr-wrap">1 Ban công</span>
                                <span class="badge rounded-pill bg-light text-dark texr-wrap">3 Ghế</span>
                            </div>

                            <div class="features2 mb-4">
                                <h6 class="mb-1">Dịch Vụ</h6>
                                <span class="badge rounded-pill bg-light text-dark texr-wrap">Wifi</span>
                                <span class="badge rounded-pill bg-light text-dark texr-wrap">Khăn Tắm </span>
                                <span class="badge rounded-pill bg-light text-dark texr-wrap">Đồ cá nhân</span>
                                <span class="badge rounded-pill bg-light text-dark texr-wrap">Đồ uống free</span>
                            </div>

                            <div class="songuoi mb-4">
                                <h6 class="mb-1">Số người</h6>
                                <span class="badge rounded-pill bg-light text-dark texr-wrap">4 người lớn</span>
                                <span class="badge rounded-pill bg-light text-dark texr-wrap">2 trẻ em </span>
                            </div>
                            <h6 class="mb-4 text-center">500.000vnd /đêm</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Đặt Ngay</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none mb-2">Xem chi tiết</a>

                        </div>

                    </div>

                </div>
                <!-- xuat phong 3-->
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 align-items-center">

                        <div class="col-md-5 ">
                            <img src="./pulic/images/rooms/IMG_42663.png" class="img-fluid roundeds">
                        </div>

                        <div class="col-md-5 ">
                            <h5 class="mb-3">Xuất tên phòng</h5>
                            <div class="features mb-4">
                                <h6 class="mb-1">Đặc Trưng</h6>
                                <span class="badge rounded-pill bg-light text-dark texr-wrap">2 Giường</span>
                                <span class="badge rounded-pill bg-light text-dark texr-wrap">1 cửa xổ </span>
                                <span class="badge rounded-pill bg-light text-dark texr-wrap">1 Ban công</span>
                                <span class="badge rounded-pill bg-light text-dark texr-wrap">3 Ghế</span>
                            </div>

                            <div class="features2 mb-4">
                                <h6 class="mb-1">Dịch Vụ</h6>
                                <span class="badge rounded-pill bg-light text-dark texr-wrap">Wifi</span>
                                <span class="badge rounded-pill bg-light text-dark texr-wrap">Khăn Tắm </span>
                                <span class="badge rounded-pill bg-light text-dark texr-wrap">Đồ cá nhân</span>
                                <span class="badge rounded-pill bg-light text-dark texr-wrap">Đồ uống free</span>
                            </div>

                            <div class="songuoi mb-4">
                                <h6 class="mb-1">Số người</h6>
                                <span class="badge rounded-pill bg-light text-dark texr-wrap">4 người lớn</span>
                                <span class="badge rounded-pill bg-light text-dark texr-wrap">2 trẻ em </span>
                            </div>
                            <h6 class="mb-4 text-center">500.000vnd /đêm</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Đặt Ngay</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none mb-2">Xem chi tiết</a>

                        </div>

                    </div>

                </div>
                <!-- xuat phong 4 end 3 phong-->
            </div>

          
            
            



        </div>
    </div>

    <?php require "./inc/footer.php" ?>

</body>

</html>