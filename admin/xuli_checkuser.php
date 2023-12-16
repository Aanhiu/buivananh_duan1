<?php
require_once "/buivananh_duan1/admin/inc/db_config.php";
require_once "/buivananh_duan1/admin/inc/essential.php";

adminLogin();
// chức năng xóa đặt phòng
// if (isset($_GET['delete'])) {
//     // Lấy ID đặt phòng cần hủy
//     $id = $_GET['delete'];

//     // Thực hiện cập nhật trạng thái phòng bằng 0
//     $updateQuery = "UPDATE phong SET trangthai = 0 WHERE id IN (SELECT phong_id FROM dat_phong WHERE id = ?";
//     $updateStmt = mysqli_prepare($conn, $updateQuery);
//     mysqli_stmt_bind_param($updateStmt, "i", $id);
//     mysqli_stmt_execute($updateStmt);

//     // Sau khi cập nhật trạng thái phòng, thực hiện xóa đặt phòng
//     $deleteQuery = "DELETE FROM `dat_phong` WHERE `id`=?";
//     $deleteStmt = mysqli_prepare($conn, $deleteQuery);
//     mysqli_stmt_bind_param($deleteStmt, "i", $id);

//     if (mysqli_stmt_execute($deleteStmt)) {
//         echo "<script>alert('Hủy đặt phòng thành công của đơn đặt phòng này !!!'); window.location='xuli_checkuser.php';</script>";
//     } else {
//         echo "<script>alert('Hủy đặt phòng thành công của đơn đặt phòng này thất bại !!! ); window.location='xuli_checkuser.php';</script>";
//     }
// }
// Truy vấn thông tin đặt phòng
// Truy vấn thông tin đặt phòng cho tất cả người dùng


// Xử lý xác nhận check-in
// Xử lý xác nhận check-in
if (isset($_GET['confirm_checkin'])) {
    $id = $_GET['confirm_checkin'];
    $updateQuery = "UPDATE dat_phong SET trangthai = 5 WHERE id = ?"; // Trạng thái "Đã Check-in"
    $stmt = mysqli_prepare($conn, $updateQuery);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
}

// Xử lý xác nhận check-out
if (isset($_GET['confirm_checkout'])) {
    $id = $_GET['confirm_checkout'];
    $updateQuery = "UPDATE dat_phong SET trangthai = 7 WHERE id = ?"; // Trạng thái "Đã Check-out"
    $stmt = mysqli_prepare($conn, $updateQuery);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
}



// Xử lý xóa đặt phòng
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $updateQuery = "UPDATE phong SET trangthai = 0 WHERE id IN (SELECT phong_id FROM dat_phong WHERE id = ?)";
    $updateStmt = mysqli_prepare($conn, $updateQuery);
    mysqli_stmt_bind_param($updateStmt, "i", $id);
    mysqli_stmt_execute($updateStmt);

    $deleteQuery = "DELETE FROM `dat_phong` WHERE `id`=?";
    $deleteStmt = mysqli_prepare($conn, $deleteQuery);
    mysqli_stmt_bind_param($deleteStmt, "i", $id);
    mysqli_stmt_execute($deleteStmt);
    echo "<script>alert('Hủy đặt phòng thành công của đơn đặt phòng này!'); window.location='xuli_checkuser.php';</script>";
}

// Truy vấn thông tin đặt phòng
$query = "SELECT nguoi_dung.name AS nguoiDungTen, nguoi_dung.email, nguoi_dung.sdt, nguoi_dung.diachi, nguoi_dung.cmnd, 
          phong.name AS tenPhong, phong.loaiphong_id, phong.image, phong.dichvu, dat_phong.id,
          dat_phong.NgayBatDau, dat_phong.NgayKetThuc, dat_phong.ghichu, dat_phong.tongTien, dat_phong.phuongthuc, dat_phong.trangthai 
          FROM dat_phong 
          JOIN nguoi_dung ON dat_phong.nguoidung_id = nguoi_dung.id 
          JOIN phong ON dat_phong.phong_id = phong.id WHERE dat_phong.trangthai != 8
          ORDER BY dat_phong.id DESC  ";

$result = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin -Quản lí check in check out</title>
    <link rel="stylesheet" href="/admin/css/style.css">
    <?php
    require "/buivananh_duan1/admin/inc/link_admin.php";
    ?>
</head>

<body class="bg-light">
    <?php require "/buivananh_duan1/admin/inc/header.php"; ?>
    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">Admin - Quản lí check in check out </h3>

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <!-- bang hien thong tin lien he-->
                        <div class="table-responsive-md" style="height:450px; overflow-y:scroll;">
                            <table class="table table-hover border">
                                <thead class="sticky-top">
                                    <tr class="bg-dark text-light">
                                        <th scope="col">id</th>
                                        <th scope="col">Tên Người Đặt</th>
                                        <th scope="col">SDT</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Địa Chỉ</th>
                                        <th scope="col">CMND</th>
                                        <th scope="col">Tên Phòng</th>
                                        <th scope="col">Loại phòng</th>
                                        <th scope="col">Ảnh phòng </th>
                                        <th scope="col">Dịch vụ</th>
                                        <th scope="col">Check in/Xác nhận Checkin</th>
                                        <th scope="col">Check out/Xác nhận Checkout</th>
                                        <th scope="col">Tổng Tiền</th>
                                        <th scope="col">Ghi chú</th>
                                        <th scope="col">Hình Thức Thanh toán</th>
                                        <th scope="col">Trạng thái</th>
                                        <th scope="col">hành động</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                                        <tr>
                                            <th scope="col"><?php echo $row['id']; ?></th>
                                            <th scope="col"><?php echo $row['nguoiDungTen']; ?></th>
                                            <th scope="col"><?php echo $row['email']; ?></th>
                                            <th scope="col"><?php echo $row['sdt']; ?></th>
                                            <th scope="col"><?php echo $row['diachi']; ?></th>
                                            <th scope="col"><?php echo $row['cmnd']; ?></th>
                                            <th scope="col"><?php echo $row['tenPhong']; ?></< /th>
                                            <th scope="col"> <?php echo $row['loaiphong_id']; ?> </th>
                                            <th scope="col"><img src="<?php echo htmlspecialchars($row['image']); ?>" width="150px" height="100px"></th>
                                            <th scope="col"><?php echo $row['dichvu']; ?></th>
                                            <th scope="col"><?php echo $row['NgayBatDau']; ?></th>
                                            <th scope="col"><?php echo $row['NgayKetThuc']; ?></th>
                                            <th scope="col"><?php echo number_format($row['tongTien'], 0, '.', ','); ?> VNĐ</th>
                                            <!-- number_format($row['tongTien'], 0, '.', ','); ?> -->
                                            <th scope="col"><?php echo $row['ghichu']; ?></th>
                                            <th scope="col"><?php echo $row['phuongthuc']; ?></th>

                                            <th scope="col"> <?php
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
                                                                    echo "Đã hoàn thành đơn đặt phòng ";
                                                                } elseif ($row['trangthai'] == 8) {
                                                                    echo "Đã hoàn thành đơn đặt phòng và Đã Hiển thị Lại ROOM";
                                                                } else {
                                                                    echo "Không xác định";
                                                                }
                                                                ?>
                                                                
                                            </th>

                                            <td>
                                                <?php if ($row['trangthai'] == 3) : ?>
                                                    <a href="?confirm_checkin=<?php echo $row['id']; ?>" class="btn btn-success btn-sm">Xác Nhận Check-In</a>

                                                <?php elseif ($row['trangthai'] == 5) : ?>

                                                    <a href="?confirm_checkout=<?php echo $row['id']; ?>" class="btn btn-success btn-sm">Xác Nhận Check-Out</a>

                                                <?php endif; ?>
                                                <a href="?delete=<?php echo $row['id']; ?>" onclick="return confirm('Bạn có chắc muốn hủy đặt phòng này không?')" class="btn btn-danger btn-sm">Hủy Đặt</a>

                                                
                                            </td>
                                        </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- end bang hien thong tin lien he-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require "/buivananh_duan1/admin/inc/scripts.php"; ?>
</body>

</html>