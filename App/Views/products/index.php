<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="<?php echo ASSETS . 'css/style.css'; ?>" rel="stylesheet" type="text/css">
</head>

<body>
    <!--Start header-->

    <header>
        <div id="bootstarpAlert">

        </div>

        <div class="container" id="header">
            <div class="row">
                <div class="col-md-6 ">
                    <h2>Product List</h2>
                </div>
                <div class="col-md-6  " id="buttons">

                    <button type="button" class="btn btn-secondary" id="add" onclick="window.location.href='<?php url('products/add'); ?>'">ADD</button>
                    <button type="button" class="btn btn-danger" id="delete-button">MASS DELETE</button>
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



                <?php foreach ($products as $row) :  ?>
                    <div class="col-md-3  cards">
                        <div class="card card-body card-style">
                            <div class="form-check checkbox">
                                <input class="form-check-input" type="checkbox" id='<?php echo $row['id']; ?>'>
                            </div>
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $row['sku']; ?></h6>
                                <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $row['name']; ?></h6>
                                <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $row['price']; ?> $</h6>
                                <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo ucwords($row['type']); ?></h6>
                                <?php
                                require_once("UTILITIES/productTypeMaker.php");

                                test($row['type'], $row);

                                ?>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="container">
            <hr>
            <h6 class="title">Scandiweb Test Assignment</h6>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

    <script>
        const urlParams = new URLSearchParams(window.location.search);
        console.log(urlParams)
        if (urlParams.has("message")) {
            toastr.success(urlParams.get("message"))

            history.pushState(null, null, "index");
        }
        // Add click event listener to the button
        document.getElementById('delete-button').addEventListener('click', function() {
            // Get all the checked checkboxes
            var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
            console.log(checkboxes)
            // Create an array to store the IDs of the checked rows
            var ids = [];


            // Loop through the checkboxes and add their ID values to the array
            for (var i = 0; i < checkboxes.length; i++) {

                ids.push(checkboxes[i].id);
            }

            $.post(`<?php url('products/delete'); ?>/${ids.join(",")}`, function() {

                }).done(function(data) {
                    if (data.success) {
                        for (checkBox of checkboxes) {
                            checkBox.parentElement.parentElement.parentElement.remove()
                        }
                        toastr.success("Products are deleted successfuly!")
                    }

                })
                .fail(function() {
                    alert("error");
                })

        });
    </script>



</body>

</html>