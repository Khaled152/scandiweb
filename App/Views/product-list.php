<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="<?php echo (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>public/css/style.css" rel="stylesheet" type="text/css">
</head>



<body>
    <!--Start header-->
    <header>
        <div class="container" id="header">
        <form method="post" action="delete-products.php">

            <div class="row my-5">
                <div class="col-md-6 ">
                    <h1>Product List</h1>
                </div>
                <div class="col-md-6  " id="buttons">

                    <button type="button"  class="btn btn-secondary"
                        onclick="window.location.href=' home/add'">ADD</button>
                    <button type="button" class="btn btn-danger" id="delete-product-btn">MASS DELETE</button>
                </div>
            </div>
            <hr>
        </div>
    </header>
    <!--End header-->

    <!--Start Main-->
    <main>
        <div class="container">
            <div class="row">
                <!--cards-->
                <?php foreach($data['total'] as $row) :?>
                <div class="col-md-3  cards">
                    <div class="card card-body card-style">
                        <div class="form-check checkbox">
                            <input class="form-check-input delete-checkbox " type="checkbox" id='<?=$row['id']?>'>
                        </div>
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-body-secondary">
                                <?=$row['sku']?>
                            </h6>
                            <h6 class="card-subtitle mb-2 text-body-secondary">
                                <?=$row['name']?>
                            </h6>
                            <h6 class="card-subtitle mb-2 text-body-secondary">
                                <?=$row['price']?>
                            </h6>
                            <h6 class="card-subtitle mb-2 text-body-secondary">
                                <?=ucwords($row['type'])?>
                            </h6>
                            <?php
                                require_once(dirname(__DIR__)."/Utilities/productTypeMaker.php");

                                test($row['type'], $row);

                                ?>
                        </div>
                    </div>
                </div>
                <?php endforeach?>
            </div>
                </form>
        </div>


    </main>
    <footer class="footer">
        <div class="container">
            <hr>
            <h6 class="title">Scandiweb Test Assignment</h6>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="<?php echo (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>public/js/delete.js"></script>

</body>

</html>