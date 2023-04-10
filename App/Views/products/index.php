<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link href="<?php echo BURL.'assets/css/style.css'; ?>" rel="stylesheet" type="text/css">
</head>

<body>
    <!--Start header-->
    <header>
        <div class="container" id="header">
            <div class="row">
                <div class="col-md-6 ">
                    <h2>Product List</h2>
                </div>
                <div class="col-md-6  " id="buttons" >
                    
                    <button type="button" class="btn btn-secondary" id="add" onclick="window.location.href='<?php url('products/add'); ?>'">ADD</button>
                    <button type="button" class="btn btn-danger" id="delete" onclick="window.location.href='<?php url('products/delete'); ?>'">MASS DELETE</button>
                    <button onclick="getCheckboxValues()">Get Values</button>


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
                <?php foreach($products as $row):  ?>
                <div class="col-md-3  cards" >
                    <div class="card card-body card-style" >
                        <div class="form-check checkbox" >
                            <input class="form-check-input" type="checkbox" name="product_ids[]" value="6"  id="flexCheckDefault">
                        </div>
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $row['sku']; ?></h6>
                            <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $row['name']; ?></h6>
                            <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $row['price']; ?> $</h6>
                            <h6 class="card-subtitle mb-2 text-body-secondary" ><?php echo $row['type']; ?></h6>
                            <?php

                                if ($row['type'] == 'book') {
                                echo '<p>Weight: ' . $row['weight'] . ' KG</p>';
                                    } else if ($row['type'] == 'DVD') {
                                echo '<p>Size: ' . $row['size'] . ' MB</p>';
                                    } else if ($row['type'] == 'furniture') {
                                        echo '<p style="font-size: 14px;">Dimensions: ' . $row['height'] . ' x ' . $row['width'] . ' x ' . $row['length'] . '</p>';
                                    }
                            ?>

                        </div>
                    </div>
                </div>
                <?php  endforeach; ?>
            </div>
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
        <script>
            function getCheckboxValues() {
            const checkboxes = document.querySelectorAll('input[type="checkbox"]');
         const checkboxValues = [];

  checkboxes.forEach((checkbox) => {
    if (checkbox.checked) {
        console.log(checkboxValues.push(checkbox.value));
    }
  });

}
        </script>
</body>

</html>



