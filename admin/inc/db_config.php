<?php
$hostname = "localhost";
$svnname = "root";
$pass = "";
$dbname = "buivananh_duan1";
// kết nối 
$conn = mysqli_connect($hostname, $svnname, $pass, $dbname);
// kem tra ket noi
// if(!$conn){
//     echo "lõi";
// }else{
//     echo "ok";
// }

// hàm loc du lieu vao form 
function loc($data)
{
    foreach ($data as $key => $value) {
        $data[$key] = trim($value);
        $data[$key] = stripslashes($value);
        $data[$key] = htmlspecialchars($value);
        $data[$key] = strip_tags($value);
    }
    return $data;
}

// ham truy van du 
function select($sql, $values, $datatypes)
{
    $conn = $GLOBALS['conn'];
    //mysqli_prepare truy van du lieu nhieu lan 
    // chuyen tham so la conn va sql
    if ($stmt = mysqli_prepare($conn, $sql)) {
        // stmt bien trong prepared statement la cau lenh chuan bi truy van 1 lan va nhieu lan
        // lien ket cac bien voi tham so truy van mysqli_prepare
        //...$value xu li du lieu tham so ko xac dinh khi lam viec 
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
        // chuc nang thuc thi 
        if (mysqli_stmt_execute($stmt)) {
            // tai len va luu tru du lieu 
            $result = mysqli_stmt_get_result($stmt);
            //
            mysqli_stmt_close($stmt);
            return $result;
        } else {
            mysqli_stmt_close($stmt);
            // ko truy van dc se die
            die("Khong tra ve ket qua truy van va du lieu tu executed - SELECT !!!");
        }
    } else {
        // ko truy van dc se die
        die("Khong tra ve ket qua truy van va du lieu tu preparad- SELECT !!!");
    }
}

// ham truy van tat ca du lieu
function selectALL($table){
    $conn = $GLOBALS['conn'];
    $result = mysqli_query($conn, "SELECT * FROM $table ");
    return $result;

}

// ham cap nhat du lieu
function update($sql, $values, $datatypes)
{
    $conn = $GLOBALS['conn'];
    if ($stmt = mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
        // chuc nang thuc thi 
        if (mysqli_stmt_execute($stmt)) {
            // tai len va luu tru du lieu 
            $result = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $result;
        } else {
            mysqli_stmt_close($stmt);
            // ko truy van dc se die
            die("Khong cap nhat va truy van du lieu tu executed - UPDATE !!!");
        }
    } else {
        // ko truy van dc se die
        die("Khong cap nhat va truy van du lieu tu preparad - Update !!!");
    }
}

// ham them du lieu
function insert($sql, $values, $datatypes)
{
    $conn = $GLOBALS['conn'];
    if ($stmt = mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
        // chuc nang thuc thi 
        if (mysqli_stmt_execute($stmt)) {
            // tai len va luu tru du lieu 
            $result = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $result;
        } else {
            mysqli_stmt_close($stmt);
            // ko truy van dc se die
            die("Khong cap nhat va truy van du lieu tu executed - INSERT!!!");
        }
    } else {
        // ko truy van dc se die
        die("Khong cap nhat va truy van du lieu tu preparad - INSERT !!!");
    }
}

// hàm xoa du lieu 
function delete($sql, $values, $datatypes)
{
    $conn = $GLOBALS['conn'];
    if ($stmt = mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
        // chuc nang thuc thi 
        if (mysqli_stmt_execute($stmt)) {
            // tai len va luu tru du lieu 
            $result = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $result;
        } else {
            mysqli_stmt_close($stmt);
            // ko truy van dc se die
            die("Khong cap nhat va truy van du lieu tu executed - DELETE !!!");
        }
    } else {
        // ko truy van dc se die
        die("Khong cap nhat va truy van du lieu tu preparad - DELETE !!!");
    }
}

