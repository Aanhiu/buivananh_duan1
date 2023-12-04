<?php
require_once "/buivananh_duan1/admin/inc/essential.php";
require_once "/buivananh_duan1/admin/inc/db_config.php";
//adminLogin();


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


?>

    <?php
    require "/buivananh_duan1/admin/inc/scripts.php";
    ?>