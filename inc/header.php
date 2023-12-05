  <?php
 require_once "/buivananh_duan1/admin/inc/essential.php";
 require_once "/buivananh_duan1/admin/inc/db_config.php";

// chức năng đăng ký
// kiểm tra xem người dùng đã đăng ký chưa 
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['dangky'])) {
    // lấy dự liệu từ form và làm sạch với hàm loc đã viết ở db_config
    $name = loc($_POST['name']);
    $email = loc($_POST['email']);
    $sdt = loc($_POST['sdt']);
    $diachi = loc($_POST['diachi']);
    $cmnd = loc($_POST['cmnd']);
    $ngaysinh = loc($_POST['ngaysinh']);
    $pass = loc($_POST['pass']);
    $confirm_pass = loc($_POST['confirm_pass']);

    // check xem mật khẩu có trùng hay ko
    if ($pass !== $confirm_pass) {
        //alert('error', 'Mật khẩu phải giống nhau !!!');
        echo "mk phải gióng nhau";
        return;
    }

    // check sdt phải là số
    if (!is_numeric($sdt)) {
        //alert('error', 'Số điện thoại bạn điền phải là số !!! ');
        echo "sdt phai la so";
        return;
    }
    // check cmnd phải là số 
    if (!is_numeric($cmnd)) {
        //alert('error', 'Số Chứng minh nhân dân bạn điền phải là số !!! ');
        echo "cmnd phai la so";
        return;
    }
    // mã hóa mật khẩu khi vào csdl
    $pass_mahoa = password_hash($pass, PASSWORD_DEFAULT);

    // truy vấn kiểm tra xem email đã tồn tại trong csdl hay chưa với điều kiện ở 
    // bảng người dùng xem email này đã có hay chưa
    $checkEmailQuery = "SELECT email FROM nguoi_dung WHERE email = ?";
    $stmt = mysqli_prepare($conn, $checkEmailQuery);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    //Hàm mysqli_stmt_execute() trong PHP được sử dụng để thực thi một truy vấn đã được chuẩn bị trước đó bằng cách sử dụng hàm mysqli_prepare() hoặc mysqli_stmt_prepare().
    // Khi được thực thi, tất cả các đánh dấu tham số sẽ được thay thế bằng dữ liệu tương ứng 1
    mysqli_stmt_store_result($stmt); // lưu trữ kết quả vào bộ đếm nội bộ với mysqli_stmt_store_result

    // mysqli_stmt_num_rows trả về số hàng đã dc lưu trong bộ đếm mysql đax đc truy vấn chuẩn bị trước đó bằng hàm 
    // mysqli_stmt_store_result Hàm này sẽ trả về số hàng đã được lưu trữ trong bộ đệm của truy vấn. Nếu tất cả các hàng đã được truy xuất từ máy chủ, hàm sẽ trả về số hàng đã được lưu trữ trong bộ
    if (mysqli_stmt_num_rows($stmt) > 0) {
        //alert('error', 'Email bạn vừa nhập đã có hoặc có người khác đăng ký rồi !!! ');
        echo "email đã có người đăng ký rồi";
        return;
    }

    // them người dùng vào csdl
    $insertQuery = "INSERT INTO nguoi_dung (name, email, sdt, diachi, cmnd, ngaysinh, pass) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $insertQuery);
    mysqli_stmt_bind_param($stmt, "sssssis", $name, $email, $sdt, $diachi, $cmnd, $ngaysinh, $pass_mahoa);
    // nếu check hết ok thực hiện in thông báo đăng ký thành công 

    if(mysqli_stmt_execute($stmt)){
        //alert('success',' Đăng ký thành công bạn có thể đăng nhập ngay bây giờ .');
        echo "dang ky ok";
        header('index.php');
    }else{
        //alert('error', 'Đăng ký thất bại lỗi khi đăng ký liên hệ với Ánh Admin để xử lí !!! ');
        echo "lỗi";
        return;
    }
}

// chuc nang dang nhap




  ?>
  <!-- menu-->
  <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm -stickky-top">
      <div class="container-fluid">
          <a class="navbar-brand me-5 fw-bold fs-3 h-font " href="index.php">AYBITI</a>
          <button class="navbar-toggler shodow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                  <li class="nav-item">
                      <a class="nav-link active me-2" aria-current="page" href="index.php"><i class="bi bi-house-door-fill"></i>Trang chủ</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link me-2" href="/phong.php"><i class="bi bi-hospital-fill"></i>Phòng</a>
                  </li>

                  <!-- <li class="nav-item">
                      <a class="nav-link me-2" href="/giaodien.php"><i class="bi bi-hospital-fill"></i>test</a>
                  </li> -->

                  <!-- <li class="nav-item">
                      <a class="nav-link me-2" href="/phong_chitiet.php"><i class="bi bi-hospital-fill"></i>Test chi tiết</a>
                  </li> -->

                  <li class="nav-item">
                      <a class="nav-link me-2" href="/trang_coso.php"><i class="bi bi-bank"></i>Cơ sở Khách sạn</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link me-2" href="/blog.php"><i class="bi bi-journal-text"></i>Bài Viết</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link me-2" href="/lienhe.php"><i class="bi bi-headset"></i>Liên Hệ </a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link me-2" href="/gioithieu.php"><i class="bi bi-exclamation-circle-fill"></i>Giới Thiệu</a>
                  </li>

              </ul>

              <div class="d-flex">
                  <!--   dangnhapModal    dangkyModel hiện đăng ký và đăng nhâp    -->
                  <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#dangnhapModal">
                      <i class="bi bi-person-circle"></i>Đăng Nhập
                  </button>

                  <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#dangkyModal">
                      <i class="bi bi-person-lines-fill"></i>Đăng Ký
                  </button>
              </div>

          </div>
      </div>

  </nav>
  <!-- end menu-->

  <!-- modal hiện đăng nhập -->
  <div class="modal fade" id="dangnhapModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">

              <!-- Form đăng ký đăng nhập tài khoản  -->
              <form action="">
                  <div class="modal-header">
                      <h5 class="modal-title ">
                          <i class="bi bi-person-circle fs-3 me-2 "></i> Đăng nhập Tài Khoản
                      </h5>
                      <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">

                      <div class="mb-3">
                          <label class="form-label">Nhập EMAIL : </label>
                          <input type="email" class="form-control shdow-none">

                      </div>
                      <div class="mb-3">
                          <label class="form-label">Nhập Mật Khẩu : </label>
                          <input type="password" class="form-control shdow-none">
                      </div>

                      <div class="d-flex align-items-center justify-content-between">
                          <button type="submit" class="btn btn-dark shodow-none">Đăng Nhập</button>
                          <a href="javascript: void(0)" class="text-secondary text-deconration-none">Lấy Lại mật khẩu ? </a>
                      </div>

                  </div>
              </form>
              <!-- end Form đăng ký đăng nhập tài khoản  -->

          </div>
      </div>
  </div>
  <!-- end modal hiện đăng nhập -->



  <!-- modal hiện đăng ký -->
  <div class="modal fade" id="dangkyModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">

              <!-- Form đăng ký đăng nhập tài khoản  -->
              <form method="POST">-
                  <div class="modal-header">
                      <h5 class="modal-title ">
                          <i class="bi bi-person-circle fs-3 me-2 "></i> Đăng ký Tài Khoản
                      </h5>
                      <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <span class="badge rounded-pill bg-light text-dark mb-3 texr-wrap lh-base">Lưu ý :Thông tin phải đúng với(Thấy tờ tùy nhân ,liên hệ chính chủ v.v) Để có thể xác nhận danh tính khi nhận phòng trân trọng</span>
                      <div class="container-fluid">

                          <div class="row">

                              <div class="col-md-6 ps-0 mb-3">
                                  <label class="form-label">Tên : </label>
                                  <input type="text" name="name" class="form-control shdow-none" required>
                              </div>

                              <div class="col-md-6 ps-0 mb-3">
                                  <label class="form-label">Email : </label>
                                  <input type="email" name="email" class="form-control shdow-none" required>
                              </div>

                              <div class="col-md-6 ps-0 mb-3">
                                  <label class="form-label">Số Điện Thoại: </label>
                                  <input style="width: 755px;" type="number" name="sdt" class="form-control shdow-none" required > 
                              </div>

                                                  
                              <div class="col-md-12 ps-0">
                                  <label class="form-label">Địa chỉ <span class="badge rounded-pill bg-light text-dark mb-3 texr-wrap lh-base">Lưu ý : Địa chỉ phải có Số nhà , phường , huyện , tỉnh , thành phố !</span></label>
                                  <textarea name="diachi" class="form-control shadow-none" rows="4" required></textarea>
                              </div>

                              <div class="col-md-6 ps-0 mb-3">
                                  <label class="form-label">Căn Cước Công Dân</label>
                                  <input name="cmnd" type="number" class="form-control shdow-none" required>
                              </div>

                              <div class="col-md-6 ps-0 mb-3">
                                  <label class="form-label">Ngày Tháng Năm Sinh: </label>
                                  <input name="ngaysinh" type="date" class="form-control shdow-none" required>
                              </div>

                              <div class="col-md-6 ps-0 mb-3">
                                  <label class="form-label">Mật Khẩu: </label>
                                  <input name="pass" type="password" class="form-control shdow-none" required>
                              </div>

                              <div class="col-md-6 ps-0 mb-3">
                                  <label class="form-label">Xác Nhận Mật Khẩu: </label>
                                  <input name="confirm_pass" type="password" class="form-control shdow-none" required>
                              </div>

                          </div>
                      </div>
                      <div class="text-center my-1">
                          <button type="submit" name="dangky" class="btn btn-dark shadow-none"> Đăng Ký</button>
                      </div>
                  </div>
              </form>
              <!-- end Form đăng ký đăng nhập tài khoản  -->
          </div>
      </div>
  </div>
  <!-- end modal hiện đăng ký -->