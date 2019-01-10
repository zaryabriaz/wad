<?php
/**
 * Created by PhpStorm.
 * User: zaryab
 * Date: 1/8/2019
 * Time: 10:47 PM
 */

require_once "../connections/db_connection.php";
if(isset($_POST['insert_btn'])) {
    $pro_title = $_POST['cat_title'];
    $Query = "insert into categories(cname)
              values('$pro_title')";
    echo $Query;
    mysqli_query($con, $Query);
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
require "../Connections/Functions.php"
?>
<head>
    <meta charset="UTF-8">
    <title>Insert Product</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <style>
        * {
            font-family: 'Old Standard TT', serif;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="text-center my-4"><i class="fas fa-plus fa-md"></i> <span class="d-none d-sm-inline"> Add New </span> Category </h1>

    <form action="" method="post">
        <div class="row">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="pro_title" class="float-md-right"> <span class="d-sm-none d-md-inline"> Catrgory </span> Title:</label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-file-signature"></i></div>
                    </div>
                    <input type="text" class="form-control" id="pro_title" name="cat_title" placeholder="Enter Cateogry " >
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto"></div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <button name="insert_btn" type="submit" class="btn btn-primary btn-block"><i class="fas fa-plus"></i> Insert Now </button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
