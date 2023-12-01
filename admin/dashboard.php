<?php

require "/buivananh_duan1/admin/inc/essential.php";
adminLogin();
// tao 1 id moi thay the id cu de bao mat 
// dang nhap thanh cong va thay doi id phien , thay doi id cu thanh moi
session_regenerate_id(true);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - dashboard </title>
    <link rel="stylesheet" href="/admin/css/style.css">
    <?php
    require "/buivananh_duan1/admin/inc/link_admin.php";
    ?>
</head>

<body class="bg-light">
   <?php
   require "/buivananh_duan1/admin/inc/header.php";
   ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden" >
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum provident necessitatibus enim ducimus ratione asperiores sunt rerum, aliquid iure magnam neque eos voluptate sapiente eveniet voluptatibus perspiciatis. Natus, minima error adipisci iure numquam officia qui delectus. Vero excepturi nulla labore illum qui magni recusandae officiis assumenda, laudantium quod quos dolor. Error adipisci facilis quasi blanditiis sunt velit mollitia earum eius ad neque molestiae aut natus perspiciatis quas totam asperiores molestias, dolores sapiente commodi, deserunt dicta? At est enim, sunt nemo ipsam vel deleniti consequuntur officiis repellendus similique id distinctio, odio autem. Mollitia tenetur voluptatibus ullam. Molestias cumque voluptatum doloribus ut aspernatur nisi quod nobis ratione. Tempore obcaecati, ipsam aperiam 
    </div>




    <?php
    require "/buivananh_duan1/admin/inc/scripts.php";
    ?>
</body>

</html>