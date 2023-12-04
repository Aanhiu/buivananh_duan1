<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Phòng</title>
    <!-- Đảm bảo đã kết nối Bootstrap 5 -->
    <?php require "./inc/link.php" ?>
</head>
<body class="gb-light">
    <?php require "./inc/header.php" ?>
    <?php
     require_once "/buivananh_duan1/admin/inc/db_config.php";
    
    if(isset($_GET['id'])){
        // lấy thông tin và xem chi tiết phòng bằng id 
        $phong_id = $_GET['id'];

        // truy vấn lấy thông tin chi tiết của phòng dựa theo id
        // truy vấn 
        $phongchitietQuery = "SELECT * FROM phong WHERE id = $phong_id";
        // trả kết quả về với biến tạo kết quả 
        $phongchitietResult = mysqli_query($conn , $phongchitietQuery);
        
        if($phongchitietResult){
            // nêu có các thông tin truy vấn đc cho vào phongchitietResult thì khai báo 1 biến mới dùng mysqli_fetch_assoc lấy dữ liêụ từ mảng kết hợp 
            $phongchitiet = mysqli_fetch_assoc($phongchitietResult);
            // xuát chi tiết xuống form bên dưới
        }else{
            echo "Lỗi truy vấn chi tiết phòng";
        }
        
    

       
        
    }
    ?>

    <!-- Phần thông tin chi tiết phòng -->
    <section class="container my-5">
        <h2>Chi tiết phòng :</h2>
        <div class="row">
            <!-- Cột ảnh phòng -->
            <div class="col-lg-8 mb-3">
                <img src="<?php echo  $phongchitiet['image'] ?>" class="img-fluid" alt="Ảnh Phòng">
            </div>

            <!-- Cột thông tin phòng -->
            <div class="col-lg-4">
                <div class="mb-3">
                    <h3 class="h-font fw-bold"><?php  echo $phongchitiet['name']; ?> </h3>
                    <p class="mb-1"> <?php  echo $phongchitiet['loaiphong_id']; ?> </p>

                    <div class="features mb-4">
                        <h6 class="mb-1">Nội Thất :</h6>
                        <span class="badge rounded-pill bg-light text-dark texr-wrap">Giường</span>
                        <span class="badge rounded-pill bg-light text-dark texr-wrap">cửa xổ </span>
                        <span class="badge rounded-pill bg-light text-dark texr-wrap">Phòng Tắm</span>
                        <span class="badge rounded-pill bg-light text-dark texr-wrap">Phòng Vệ Sinh</span>
                        <span class="badge rounded-pill bg-light text-dark texr-wrap">Ghế</span>
                    </div>

                    <div class="features2 mb-4">
                        <h6 class="mb-1">Dịch Vụ :</h6>
                        <span class="badge rounded-pill bg-light text-dark texr-wrap"><?php  echo $phongchitiet['dichvu']  ?></span>

                    </div>

                    <div class="songuoi mb-4">
                        <h6 class="mb-1">Số người có thể chứa :</h6>
                        <span class="badge rounded-pill bg-light text-dark texr-wrap">2 người lớn</span>
                        <span class="badge rounded-pill bg-light text-dark texr-wrap">2 trẻ em</span>
                    </div>

                    <div class="mb-2">
                        <h6>Đánh giá</h6>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>


                    <!-- <h4 class="mb-4"> . number_format($row['gia'], 0, '.', ',') .  </h4> -->
                    <h4 class="mb-4"> <?php  echo number_format($phongchitiet['gia'], 0, '.', ',') ?> VND / Đêm</h4>
                    <div class="d-grid gap-2">
                        <a href="#" class="btn btn-dark">Đặt Phòng Ngay</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12">
                <h3 class="h-font fw-bold">Dịch vụ mỗi phòng có khách sạn đều có : </h3>
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
                            <img src="./pulic/images/facilities/giat.jpg" width="80px">
                            <h5 class="mt-3">Giặt ủi</h5>
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


            </div>
        </div>
        <!-- Phần mô tả chi tiết -->
        <div class="row mt-4">
            <div class="col-12">
                <h3 class="h-font fw-bold">Thông tin chi tiết</h3>
                <p><?php  echo $phongchitiet['mota'] ?></p>
                <!-- Thêm mô tả chi tiết khác tại đây -->
            </div>
        </div>




      
        <h4>Bình luận</h4>
        <form>
            
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Nội dung bình luận</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Bình Luận</button>
        </form>

    </section>

    <?php require "./inc/footer.php" ?>

</body>
</html>