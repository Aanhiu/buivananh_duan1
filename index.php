<!DOCTYPE html>
<html lang="en">
<?php 

//require_once "/buivananh_duan1/admin/inc/db_config.php";



?>




<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ </title>
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

    <!-- check kiểm tra form có sẵn -->
    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Phòng </h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Ngày đi :</label>
                            <input type="date" class="form-control shadow-none">
                        </div>

                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Ngày đến :</label>
                            <input type="date" class="form-control shadow-none">
                        </div>

                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Người lớn :</label>
                            <select class="form-select shadow-none">
                                <option selected>Chọn số người lớn</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="3">4</option>
                                <option value="3">5</option>
                            </select>
                        </div>

                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Trẻ em:</label>
                            <select class="form-select shadow-none">
                                <option selected>Chọn số trẻ em</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="3">4</option>
                                <option value="3">5</option>
                            </select>
                        </div>

                        <div class="col-lg-2 mb-lg-3 mt-2  ">

                            <button type="submit" class="btn text-white shadow-none custom-bg">Tìm Phòng</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--end fom check phong -->

    <!-- phong trang chủ-->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> Phòng Sang trọng của chúng tôi</h2>

    <div class="container">
        <div class="row">

            <!-- 1 cac phong theo ô xuông xuất hiện ở trang chủ-->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="./pulic/images/rooms/IMG_11892.png" class="card-img-top">

                    <!-- phong -->
                    <div class="card-body">
                        <h5>Xuất tên phòng </h5>
                        <h6 class="mb-4">Xuất giá phòng / đêm </h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Đặc Trưng</h6>
                            <span class="badge rounded-pill bg-light text-dark texr-wrap">2 Giường</span>
                            <span class="badge rounded-pill bg-light text-dark texr-wrap">1 cửa xổ </span>
                            <span class="badge rounded-pill bg-light text-dark texr-wrap">1 Ban công</span>
                            <span class="badge rounded-pill bg-light text-dark texr-wrap">3 Ghế</span>
                        </div>

                        <div class="features mb-4">
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
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Đặt Ngay</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Xem chi tiết</a>
                        </div>
                    </div>
                    <!--end phong-->

                </div>
            </div>
            <!-- 2 end cac phong theo ô xuông xuất hiện ở trang chủ-->

            <!-- 2 cac phong theo ô xuông xuất hiện ở trang chủ-->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="./pulic/images/rooms/IMG_11892.png" class="card-img-top">

                    <!-- phong -->
                    <div class="card-body">
                        <h5>Xuất tên phòng </h5>
                        <h6 class="mb-4">Xuất giá phòng / đêm </h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Đặc Trưng</h6>
                            <span class="badge rounded-pill bg-light text-dark texr-wrap">2 Giường</span>
                            <span class="badge rounded-pill bg-light text-dark texr-wrap">1 cửa xổ </span>
                            <span class="badge rounded-pill bg-light text-dark texr-wrap">1 Ban công</span>
                            <span class="badge rounded-pill bg-light text-dark texr-wrap">3 Ghế</span>
                        </div>

                        <div class="features mb-4">
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
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Đặt Ngay</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Xem chi tiết</a>
                        </div>
                    </div>
                    <!--end phong-->

                </div>
            </div>
            <!--2 end cac phong theo ô xuông xuất hiện ở trang chủ-->

            <!-- 3 cac phong theo ô xuông xuất hiện ở trang chủ-->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="./pulic/images/rooms/IMG_11892.png" class="card-img-top">

                    <!-- phong -->
                    <div class="card-body">
                        <h5>Xuất tên phòng </h5>
                        <h6 class="mb-4">Xuất giá phòng / đêm </h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Đặc Trưng</h6>
                            <span class="badge rounded-pill bg-light text-dark texr-wrap">2 Giường</span>
                            <span class="badge rounded-pill bg-light text-dark texr-wrap">1 cửa xổ </span>
                            <span class="badge rounded-pill bg-light text-dark texr-wrap">1 Ban công</span>
                            <span class="badge rounded-pill bg-light text-dark texr-wrap">3 Ghế</span>
                        </div>

                        <div class="features mb-4">
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
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Đặt Ngay</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Xem chi tiết</a>
                        </div>
                    </div>
                    <!--end phong-->

                </div>
            </div>

             <!-- 1 cac phong theo ô xuông xuất hiện ở trang chủ-->
             <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="./pulic/images/rooms/IMG_11892.png" class="card-img-top">

                    <!-- phong -->
                    <div class="card-body">
                        <h5>Xuất tên phòng </h5>
                        <h6 class="mb-4">Xuất giá phòng / đêm </h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Đặc Trưng</h6>
                            <span class="badge rounded-pill bg-light text-dark texr-wrap">2 Giường</span>
                            <span class="badge rounded-pill bg-light text-dark texr-wrap">1 cửa xổ </span>
                            <span class="badge rounded-pill bg-light text-dark texr-wrap">1 Ban công</span>
                            <span class="badge rounded-pill bg-light text-dark texr-wrap">3 Ghế</span>
                        </div>

                        <div class="features mb-4">
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
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Đặt Ngay</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Xem chi tiết</a>
                        </div>
                    </div>
                    <!--end phong-->

                </div>
            </div>

             <!-- 1 cac phong theo ô xuông xuất hiện ở trang chủ-->
             <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="./pulic/images/rooms/IMG_11892.png" class="card-img-top">

                    <!-- phong -->
                    <div class="card-body">
                        <h5>Xuất tên phòng </h5>
                        <h6 class="mb-4">Xuất giá phòng / đêm </h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Đặc Trưng</h6>
                            <span class="badge rounded-pill bg-light text-dark texr-wrap">2 Giường</span>
                            <span class="badge rounded-pill bg-light text-dark texr-wrap">1 cửa xổ </span>
                            <span class="badge rounded-pill bg-light text-dark texr-wrap">1 Ban công</span>
                            <span class="badge rounded-pill bg-light text-dark texr-wrap">3 Ghế</span>
                        </div>

                        <div class="features mb-4">
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
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Đặt Ngay</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Xem chi tiết</a>
                        </div>
                    </div>
                    <!--end phong-->

                </div>
            </div>

             <!-- 1 cac phong theo ô xuông xuất hiện ở trang chủ-->
             <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="./pulic/images/rooms/IMG_11892.png" class="card-img-top">

                    <!-- phong -->
                    <div class="card-body">
                        <h5>Xuất tên phòng </h5>
                        <h6 class="mb-4">Xuất giá phòng / đêm </h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Đặc Trưng</h6>
                            <span class="badge rounded-pill bg-light text-dark texr-wrap">2 Giường</span>
                            <span class="badge rounded-pill bg-light text-dark texr-wrap">1 cửa xổ </span>
                            <span class="badge rounded-pill bg-light text-dark texr-wrap">1 Ban công</span>
                            <span class="badge rounded-pill bg-light text-dark texr-wrap">3 Ghế</span>
                        </div>

                        <div class="features mb-4">
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
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Đặt Ngay</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Xem chi tiết</a>
                        </div>
                    </div>
                    <!--end phong-->

                </div>
            </div>
            <!--3 end cac phong theo ô xuông xuất hiện ở trang chủ-->
            <div class="col-lg-12 text-center mt-5">
                <a href="phong.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow">Xem Thêm</a>
            </div>
        </div>
    </div>
    <!-- end phong ơ trang chu-->

    <!-- cac dich vu them cua khach san-->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> Các dịch vụ của khách sạn</h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded">
                <img src="./pulic/images/facilities/w.svg" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded">
                <img src="./pulic/images/facilities/d.svg" width="80px">
                <h5 class="mt-3">Máy lạnh</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded">
                <img src="./pulic/images/facilities/m.svg" width="80px">
                <h5 class="mt-3">Mát Xa</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded">
                <img src="./pulic/images/facilities/dien.svg" width="80px">
                <h5 class="mt-3">Điện</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded">
                <img src="./pulic/images/facilities/r.svg" width="80px">
                <h5 class="mt-3">Radio</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded">
                <img src="./pulic/images/facilities/t.svg" width="80px">
                <h5 class="mt-3">Tivi</h5>
            </div>
        </div>
    </div>
    <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow">Xem Thêm Các dịch vụ</a>
    </div>
    </div>
    <!-- end các dịch vu them cua khach san-->

    <!-- các bài đánh gía về khách sạn-->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Đánh giá về khách sạn</h2>
    <div class="container mt-5">
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center p-4">
                        <img src="" alt="">
                        <h6 class="m-0">Bùi Văn Ánh</h6>
                    </div>
                    <p>Tôi là một cá nhân yêu thích công nghệ và tri thức. Tôi luôn hứng thú với việc học hỏi và chia sẻ kiến thức với mọi người. Tôi có kinh nghiệm trong lĩnh vực lập trình và công nghệ thông tin</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center p-4">
                        <img src="" alt="">
                        <h6 class="m-0">Đỗ Trọng Bằng</h6>
                    </div>
                    <p>Khách sạn tuyệt lắm Tôi luôn hứng thú với việc học hỏi và chia sẻ kiến thức với mọi người. Tôi có kinh nghiệm trong lĩnh vực lập trình và công nghệ ,Tôi có kinh nghiệm trong lĩnh vực lập trình và công nghệ</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center p-4">
                        <img src="" alt="">
                        <h6 class="m-0">Tú</h6>
                    </div>
                    <p>Tôi là một cá nhân yêu thích việc ngủ tại khách sạn này Tôi luôn hứng thú với việc học hỏi và chia sẻ kiến thức với mọi người. Tôi có kinh nghiệm trong lĩnh vực lập trình và công nghệ </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center p-4">
                        <img src="" alt="">
                        <h6 class="m-0">Ronaldo CR7</h6>
                    </div>
                    <p> khách sạn này Tôi luôn hứng thú với việc học hỏi và chia sẻ kiến thức với mọi người. Tôi có kinh nghiệm trong lĩnh vực lập trình và công nghệ , luôn hứng thú với việc học hỏi và chia sẻ kiến thức với mọi người. Tôi có kinh nghiệm trong lĩnh vực lập trình và công nghệ </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <!-- end các bài viết blog về khách san-->

        <?php require "./inc/footer.php" ?>











    </body>















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script src="./pulic/js/sile_header.js"></script>
<script src="./pulic/js/chuyen_anh.js"></script>

</html>