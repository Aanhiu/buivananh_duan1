    <?php
    require_once "/buivananh_duan1/admin/inc/db_config.php";
    danhxuat();

    $xuatHoaDon = null;

    if (isset($_GET['id'])) {
        $bookingId = $_GET['id'];

        // Truy vấn thông tin đặt phòng
        $xuatHoaDon = "SELECT nguoi_dung.name AS nguoiDungTen, nguoi_dung.email, nguoi_dung.sdt, nguoi_dung.diachi, nguoi_dung.cmnd, 
                       phong.name AS tenPhong, phong.loaiphong_id, phong.image, phong.dichvu, dat_phong.id,
                       dat_phong.NgayBatDau, dat_phong.NgayKetThuc, dat_phong.ghichu, dat_phong.tongTien, dat_phong.phuongthuc, dat_phong.trangthai 
                       FROM dat_phong 
                       JOIN nguoi_dung ON dat_phong.nguoidung_id = nguoi_dung.id 
                       JOIN phong ON dat_phong.phong_id = phong.id 
                       WHERE dat_phong.id = ?";
        $stmt = mysqli_prepare($conn, $xuatHoaDon);
        mysqli_stmt_bind_param($stmt, "i", $bookingId);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
    }

    // Xử lý check-in
    if (isset($_POST['checkin'])) {
        $bookingId = $_POST['booking_id'];
        // Cập nhật trạng thái sang "Chờ xác nhận check-in" (5)
        $updateQuery = "UPDATE dat_phong SET trangthai = 5 WHERE id = ?";
        $stmt = mysqli_prepare($conn, $updateQuery);
        mysqli_stmt_bind_param($stmt, "i", $bookingId);
        mysqli_stmt_execute($stmt);
        // Chuyển hướng trang để cập nhật thông tin
        header("Location: user_checkin_out.php?id=" . $bookingId);
        exit();
    }

    // Xử lý check-out
    if (isset($_POST['checkout'])) {
        $bookingId = $_POST['booking_id'];
        // Cập nhật trạng thái sang "Chờ xác nhận check-out" (6)
        $updateQuery = "UPDATE dat_phong SET trangthai = 6 WHERE id = ?";
        $stmt = mysqli_prepare($conn, $updateQuery);
        mysqli_stmt_bind_param($stmt, "i", $bookingId);
        mysqli_stmt_execute($stmt);
        // Chuyển hướng trang để cập nhật thông tin
        header("Location: user_checkin_out.php?id=" . $bookingId);
        exit();
    }


    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hóa đơn</title>
        <?php require "/buivananh_duan1/inc/link.php" ?>
        <?php
        require "/buivananh_duan1/admin/inc/link_admin.php";

        ?>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body class="bg-light">
        <?php
        require "/buivananh_duan1/inc/header.php";
        ?>
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
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Chức năng check in & check out</h2>
        <div class="container-fluid">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-lg-2 bg-warning border-top border-3 border-secondary" id="dashboard-menu" style="height: 500px;">
                    <nav class="navbar navbar-expand-lg ">
                        <div class="container-fluid flex-lg-column align-items-stretch">
                            <h4 class="mt-2 text-light ">Chức năng </h4>
                            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#loc" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="loc">
                                <ul class="nav nav-pills flex-column">
                                    <h4 class="mt-2 text-red ">Tổng quan</h4>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="/admin/index.php">Đăng Nhâp ADMIN</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="user_taikhoan.php">Thông tin tài khoản </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="user_hoadon.php">Hóa đơn đặt phòng</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="user_lichsu.php">Lịch sử đặt phòng</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link text-white" href="user_binhluan.php">Bình luận đã viết</a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="phong.php">Xem thêm phòng</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="index.php">Về trang chủ</a>
                                    </li>
                                    <form method="post">
                                        <button type="submit" name="dangxuat" class="btn btn-outline-dark shadow-none me-lg-3 me-2">
                                            Đăng Xuất
                                        </button>
                                    </form>
                                </ul>
                            </div>
                    </nav>
                </div>
                <!-- Nội dung chính -->
                <div class="col-lg-10" id="main-content">
                    <div class="card border-0 shadow-sm mb-2">
                        <div class="container my-5">
                            <div class="row">
                                <div class="col-md-6">
                                    <table class=" table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Tên Người Đặt</th>
                                                <th>SDT</th>
                                                <th>Email</th>
                                                <th>Địa Chỉ</th>
                                                <th>CMND</th>
                                                <th>Tên Phòng</th>
                                                <th>Loại Phòng</th>
                                                <th>Ảnh Phòng</th>
                                                <th>Dịch Vụ</th>
                                                <th>Check In</th>
                                                <th>Check Out</th>
                                                <th>Tổng Tiền</th>
                                                <th>Ghi Chú</th>
                                                <th>Hình Thức Thanh Toán</th>
                                                <th>Trạng Thái</th>
                                                <th>Hành Động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Lặp để tạo nhiều hàng, dữ liệu mẫu ở đây -->
                                            <tr>

                                                <?php if ($row = mysqli_fetch_assoc($result)) : ?>
                                                    <td><?php echo $row['nguoiDungTen']; ?> </td>
                                                    <td><?php echo ($row['sdt']); ?></td>
                                                    <td> <?php echo ($row['email']); ?> </td>
                                                    <td> <?php echo ($row['diachi']); ?> </td>
                                                    <td><?php echo ($row['cmnd']); ?></td>
                                                    <td><?php echo ($row['tenPhong']); ?></td>
                                                    <td><?php echo ($row['loaiphong_id']); ?></td>
                                                    <td><img src="<?php echo htmlspecialchars($row['image']); ?>" width="150px" height="100px"></td>
                                                    <td><?php echo ($row['dichvu']); ?> </td>
                                                    <td><?php echo ($row['NgayBatDau']); ?></td>
                                                    <td><?php echo ($row['NgayKetThuc']); ?></td>
                                                    <td> <?php echo number_format($row['tongTien'], 0, '.', ','); ?> VNĐ </td>
                                                    <td> <?php echo ($row['ghichu']); ?> </td>
                                                    <td><?php echo ($row['phuongthuc']); ?></td>
                                                    <td>

                                                        <?php
                                                        // xuất trạng thái ra cho người dùng 
                                                        if ($row['trangthai'] == 0) {
                                                            echo "Chờ xác nhận";
                                                        } elseif ($row['trangthai'] == 1) {
                                                            echo "Đã xác nhận";
                                                        } elseif ($row['trangthai'] == 2) {
                                                            echo "Đã hủy";
                                                        } elseif ($row['trangthai'] == 3) {
                                                            echo "Đã Check in";
                                                        } elseif ($row['trangthai'] == 4) {
                                                            echo "Đã check out";
                                                        } elseif ($row['trangthai'] == 5) {
                                                            echo "Đã xác nhận check in ";
                                                        } elseif ($row['trangthai'] == 6) {
                                                            echo "Đã xác nhận check out";
                                                        } elseif ($row['trangthai'] == 7) {
                                                            echo "Đã hoàn thành đơn đặt phòng";
                                                        } else {
                                                            echo "Không xác định";
                                                        }
                                                        ?>

                                                    </td>
                                                    <td>

                                                        <?php if ($row['trangthai'] == 1) : ?>
                                                            <form action="user_checkin_out.php?id=<?php echo $row['id']; ?>" method="post">
                                                                <input type="hidden" name="booking_id" value="<?php echo $row['id']; ?>">
                                                                <button type="submit" name="checkin" class="btn btn-primary">Check in</button>
                                                            </form>
                                                        <?php elseif ($row['trangthai'] == 5) : ?>
                                                            <form action="user_checkin_out.php?id=<?php echo $row['id']; ?>" method="post">
                                                                <input type="hidden" name="booking_id" value="<?php echo $row['id']; ?>">
                                                                <button type="submit" name="checkout" class="btn btn-danger">Check out</button>
                                                            </form>
                                                        <?php endif; ?>
                                                    <?php else : ?>
                                                        <p>Không tìm thấy thông tin đặt phòng với ID này.</p>
                                                    <?php endif; ?>

                                                    </td>
                                            </tr>
                                            <!-- Thêm các hàng khác tùy theo dữ liệu của bạn -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <?php
        require "/buivananh_duan1/inc/footer.php";
        require "/buivananh_duan1/admin/inc/scripts.php";
        ?>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script src="./pulic/js/sile_header.js"></script>
    <script src="./pulic/js/chuyen_anh.js"></script>

    </html>