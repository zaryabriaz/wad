<?php

require("../server/connect_db.php");
require("../server/function.php");
if(isset($_POST['insert_bttn']))
{
    $pro_cat=$_POST['pro_cat'];
    $pro_brand=$_POST['pro_brand'];
    $pro_title=$_POST['pro_title'];
    $pro_price=$_POST['pro_price'];
    $pro_desc=$_POST['pro_desc'];
    $pro_keyword=$_POST['pro_kw'];
$Query="insert into product(pro_cat,pro_brand,pro_title,pro_price,pro_desc,pro_keyword)
values('$pro_cat','$pro_brand','$pro_title','$pro_price','$pro_desc','$pro_keyword')";
echo $Query;
$q=mysqli_query($connection,$Query);

    if ($connection->query($Query) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $Query . "<br>" . $connection->error;
    }
    $connection->close();
}
?>

<!DOCTYPE html>
<html lang="en">
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
    <h1 class="text-center my-4"><i class="fas fa-plus fa-md"></i> <span class="d-none d-sm-inline"> Add New </span> Product </h1>
    <form  method="post">
        <div class="row">
            <div class="">
                <label for="pro_title" class="float-md-right"> <span class="d-sm-none d-md-inline"> Product </span> Title:</label>
            </div>
            <div class="">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-file-signature"></i></div>
                    </div>
                    <input type="text" class="form-control" id="pro_title" name="pro_title" placeholder="Enter Product Title" >
                </div>
            </div>
            <div class="">
                <label for="pro_cat" class="float-md-right"><span class="d-sm-none d-md-inline"> Product </span> Category:</label>
            </div>
            <div class=" mt-3 mt-lg-0">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-list-alt"></i></div>
                    </div>
                    <select class="form-control" id="pro_cat" name="pro_cat">
                        <option>Select Category</option>
                        <?php
                        $temp=getcategories();
                        for($i=0;$i<mysqli_num_rows($temp);$i++)
                        {
                            $row=mysqli_fetch_assoc($temp);
                        echo "<option>" .$row[cname]."</option>";
                        }



                        ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="">
                <label for="pro_brand" class="float-md-right"> <span class="d-sm-none d-md-inline"> Product </span> Brand:</label>
            </div>
            <div class="">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-stamp"></i></div>
                    </div>
                    <select class="form-control" id="pro_brand" name="pro_brand">
                        <option>Select Brand</option>

                        <?php
                        $temp=getbrand();
                        for($i=0;$i<mysqli_num_rows($temp);$i++)
                        {
                            $row=mysqli_fetch_assoc($temp);
                            echo "<option>" .$row[bname]."</option>";
                        }

                        ?>
                </div>
            </div>
            <div class="">
                <label for="pro_img" class="float-md-right"><span class="d-sm-none d-md-inline"> Product </span> Image:</label>
            </div>
            <div class=" mt-3 mt-lg-0">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="far fa-image"></i></div>
                    </div>
                    <input class="form-control" type="file" id="pro_img" name="pro_img">
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="">
                <label for="pro_price" class="float-md-right"> <span class="d-sm-none d-md-inline"> Product </span> Price:</label>
            </div>
            <div class="">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-money-bill"></i></div>
                    </div>
                    <input class="form-control" id="pro_price" name="pro_price" placeholder="Enter Product Price">
                </div>
            </div>
            <div class="">
                <label for="pro_kw" class="float-md-right"><span class="d-sm-none d-md-inline"> Product </span> Keyword:</label>
            </div>
            <div class=" mt-3 mt-lg-0">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-key"></i></div>
                    </div>
                    <input class="form-control" type="text" id="pro_kw" name="pro_kw" placeholder="Enter Product Keywords">
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="">
                <label for="pro_desc" class="float-md-right"><span class="d-sm-none d-md-inline"> Product </span> Detail:</label>
            </div>
            <div class="">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="far fa-comment-alt"></i></div>
                    </div>
                    <textarea class="form-control" type="file" id="pro_desc" name="pro_desc" placeholder="Enter Product Detail"></textarea>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class=""></div>
            <div class="">
                <button type="submit" class="btn btn-primary btn-block" name="insert_bttn"><i class="fas fa-plus"></i> Insert Now </button>
            </div>
        </div>
    </form>
</div>
</body>
</html>