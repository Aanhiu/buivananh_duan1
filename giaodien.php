<?php require "./inc/header.php";
require "./inc/link.php"; ?>


<div class="container">
    <div class="row ">
        <div class="col-lg-9 col-md-12 px-4">
            ///

            <?php

            echo '<div class="card mb-4 border-0 shadow">';
            echo '<div class="row g-0 align-items-center">';

            echo '<div class="col-md-5 ">';
            echo '<img class="img-fluid roundeds">';
            echo '</div>';

            echo '<div class="col-md-5 ">';
            echo '<h5 class="mb-3">Xuất tên phòng</h5>';
            echo '<h6 class="mb-3">Loại Phòng : xuat loai phong</h6>';

            echo '<div class="features mb-4">';
            echo '<h6 class="mb-1">ALL Nội Thất</h6>';
            echo ' <span class="badge rounded-pill bg-light text-dark texr-wrap">2 Giường</span>';
            echo ' <span class="badge rounded-pill bg-light text-dark texr-wrap">1 cửa xổ </span>';
            echo '<span class="badge rounded-pill bg-light text-dark texr-wrap">1 Ban công</span>';
            echo '<span class="badge rounded-pill bg-light text-dark texr-wrap">3 Ghế</span>';
            echo '</div>';

            echo '<div class="features2 mb-4">';
            echo ' <h6 class="mb-1">ALL Dịch Vụ</h6>';
            echo '<span class="badge rounded-pill bg-light text-dark texr-wrap">Xuat dich vu</span>';

            echo '</div>';

            echo '<div class="songuoi mb-4">';
            echo '<h6 class="mb-1">ALL Số người</h6>';
            echo '<span class="badge rounded-pill bg-light text-dark texr-wrap">4 người lớn</span>';
            echo ' <span class="badge rounded-pill bg-light text-dark texr-wrap">2 trẻ em</span>';
            echo ' </div>';
            echo '<div class="songuoi mb-4">';
            echo '<h6 class="mb-1">Mô tả:</h6>';
            echo '<p>xuat mo ta </p>';

            echo '</div>';
            echo ' <h6 class="mb-4 text-center">xuât gía /đêm</h6>';
            echo '<a href="#" name="booking" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Đặt Ngay</a>';
            echo '<a href="#" name="chitiet" class="btn btn-sm w-100 btn-outline-dark shadow-none mb-2">Xem chi tiết</a>';

            echo '</div>';
            echo '</div>';
            echo '</div>';


            ?>
            echo <div class="card mb-4 border-0 shadow">';
                <div class="row g-0 align-items-center">

                    <div class="col-md-5 ">
                        <img class="img-fluid roundeds"> // xuat ảnh
                    </div>

                    <div class="col-md-5 ">
                        <h5 class="mb-3">Xuất tên phòng</h5>
                        <h6 class="mb-3">Loại Phòng : xuat loai phong</h6>

                        <div class="features mb-4">
                            <h6 class="mb-1">ALL Nội Thất</h6>
                            <span class="badge rounded-pill bg-light text-dark texr-wrap">2 Giường</span>
                            <span class="badge rounded-pill bg-light text-dark texr-wrap">1 cửa xổ </span>
                            <span class="badge rounded-pill bg-light text-dark texr-wrap">1 Ban công</span>
                            <span class="badge rounded-pill bg-light text-dark texr-wrap">3 Ghế</span>
                        </div>

                        <div class="features2 mb-4">
                            <h6 class="mb-1">ALL Dịch Vụ</h6>
                            <span class="badge rounded-pill bg-light text-dark texr-wrap">Xuat dich vu</span>

                        </div>

                        <div class="songuoi mb-4">
                            <h6 class="mb-1">ALL Số người</h6>
                            <span class="badge rounded-pill bg-light text-dark texr-wrap">4 người lớn</span>
                            <span class="badge rounded-pill bg-light text-dark texr-wrap">2 trẻ em</span>
                        </div>
                        <div class="songuoi mb-4">
                            <h6 class="mb-1">Mô tả:</h6>
                            <p>xuat mo ta </p>

                        </div>
                        <h6 class="mb-4 text-center">xuât gía /đêm</h6>
                        <a href="#" name="booking" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Đặt Ngay</a>
                        <a href="#" name="chitiet" class="btn btn-sm w-100 btn-outline-dark shadow-none mb-2">Xem chi tiết</a>

                    </div>
                </div>
            </div>




            ////
        </div>
    </div>
</div>

<?php
// test
echo "Test gd";

echo '<div class="card mb-4 border-0 shadow">';
echo '<div class="row g-0">';

echo '<div class="col-md-5">';
echo '<img class="img-fluid rounded" src="">';
echo '</div>';

echo '<div class="col-md-7">';

echo '<h5 class="mb-2"></h5>'; // Tên phòng
echo '<h6 class="text-muted mb-4"></h6>'; // Loại phòng hoặc ID

echo '<div class="mb-3">'; // Bắt đầu nội dung chính
echo '<h6 class="mb-1">Đặc Trưng</h6>';
// Tiếp tục với các đặc trưng như giường, cửa sổ, etc.
echo '</div>';

echo '<div class="mb-3">'; // Bắt đầu dịch vụ
echo '<h6 class="mb-1">Dịch Vụ</h6>';
// Tiếp tục với các dịch vụ như Wifi, khăn tắm, etc.
echo '</div>';

echo '<div class="mb-4">'; // Bắt đầu số người và mô tả
echo '<h6 class="mb-1">Số người</h6>';
// Tiếp tục với thông tin về số người lớn và trẻ em
echo '</div>';

echo '<div class="mb-4">'; // Mô tả
echo '<h6 class="mb-1">Mô tả:</h6>';
echo '<p></p>';
echo '</div>';

echo '<div class="row mb-4">'; // Bắt đầu hàng mới cho giá và trạng thái
echo '<div class="col-6">';
echo '<h5>VND/Đêm</h5>';
echo '</div>';
echo '<div class="col-6">';
echo '<h6 class="text-secondary"></h6>';
echo '</div>';
echo '</div>'; // Kết thúc hàng cho giá và trạng thái

echo '<div class="d-grid gap-2">'; // Bắt đầu các nút
echo '<a href="#" class="btn btn-primary mb-2">Đặt Ngay</a>'; // Nút đặt phòng
echo '<a href="#" class="btn btn-outline-secondary">Xem chi tiết</a>'; // Nút xem chi tiết
echo '</div>'; // Kết thúc các nút

echo '</div>'; // Kết thúc cột chính

echo '</div>'; // Kết thúc hàng chính
echo '</div>'; // Kết thúc card

//https://pixabay.com/vi/images/search/hotel/








?>


