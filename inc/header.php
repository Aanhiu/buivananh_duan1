  <?php
  require('admin/inc/db_config.php');
  require('admin/inc/essential.php');
  
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
                  <li class="nav-item">
                      <a class="nav-link me-2" href="/giaodien.php"><i class="bi bi-hospital-fill"></i>test</a>
                  </li>

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
              <form action="">
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
                                  <input type="text" class="form-control shdow-none">
                              </div>

                              <div class="col-md-6 ps-0 mb-3">
                                  <label class="form-label">Email : </label>
                                  <input type="email" class="form-control shdow-none">
                              </div>

                              <div class="col-md-6 ps-0 mb-3">
                                  <label class="form-label">Số Điện Thoại: </label>
                                  <input type="number" class="form-control shdow-none">
                              </div>

                              <div class="col-md-6 ps-0">
                                  <label class="form-label">Ảnh </label>
                                  <input type="file" class="form-control shdow-none">
                              </div>

                              <div class="col-md-12 ps-0">
                                  <label class="form-label">Địa chỉ</label>
                                  <textarea class="form-control shadow-none" rows="1"></textarea>
                              </div>

                              <div class="col-md-6 ps-0 mb-3">
                                  <label class="form-label">MÃ PIN: </label>
                                  <input type="number" class="form-control shdow-none">
                              </div>

                              <div class="col-md-6 ps-0 mb-3">
                                  <label class="form-label">Ngày Tháng Năm Sinh: </label>
                                  <input type="date" class="form-control shdow-none">
                              </div>

                              <div class="col-md-6 ps-0 mb-3">
                                  <label class="form-label">Mật Khẩu: </label>
                                  <input type="password" class="form-control shdow-none">
                              </div>

                              <div class="col-md-6 ps-0 mb-3">
                                  <label class="form-label">Xác Nhận Mật Khẩu: </label>
                                  <input type="password" class="form-control shdow-none">
                              </div>
                          </div>
                      </div>
                      <div class="text-center my-1">
                          <button type="submit" class="btn btn-dark shadow-none"> Đăng Ký</button>
                      </div>
                  </div>
              </form>
              <!-- end Form đăng ký đăng nhập tài khoản  -->
          </div>
      </div>
  </div>
  <!-- end modal hiện đăng ký -->