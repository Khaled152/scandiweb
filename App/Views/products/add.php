<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product add</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="<?php echo ASSETS.'css/style.css'; ?>" rel="stylesheet" type="text/css">
</head>

<body>
    <!--Start header-->
    <header>
        <div class="container" id="header">
            <div class="row">
                <div class="col-md-6 ">
                    <h2>Add Product</h2>
                </div>
                <div class="col-md-6  " id="buttons">

                    <button form="myform" type="submit" name="submit" class="btn btn-success">SAVE</button>
                    <button type="button" class="btn btn-secondary" id="Cancel"  onclick="window.location.href='<?php url('products/index'); ?>';">Cancel</button>
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
                <form class="p-5 border mb-5" id="myform" method="POST" action="<?php url('products/store'); ?>">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text"  name="name" class="form-control" id="name" >
                    </div>
                    <div class="form-group">
                        <label for="sku">SKU</label>
                        <input type="text"  class="form-control" name="sku" id="sku" >
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text"  class="form-control" name="price" id="price" >
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <select type="select"  class="form-control" name="type" id="type" >
                        <option >choose..</option>
                        <option value="book">Book</option>
                        <option value="DVD">DVD</option>
                        <option value="furniture">Furniture</option>
                        </select>







                        <div id="book_fields" style="display: none;">
                            <label for="weight">Weight(KG):</label>
                            <input type="number" id="weight" name="weight" min="0" step="0.01" ><br>
                        </div>
                
                        <div id="dvd_fields" style="display: none;">
                            <label for="size">Size(MB):</label>
                            <input type="number" id="size" name="size"  ><br>
                        </div>
                
                        <div id="furniture_fields" style="display: none;">
                            <label for="height">Height:</label>
                            <input type="number" id="height" name="height" min="0" step="0.01"  ><br>
                
                            <label for="width">Width:</label>
                            <input type="number" id="width" name="width" min="0" step="0.01"   ><br>
                
                            <label for="length">Length:</label>
                            <input type="number" id="length" name="length" min="0" step="0.01"  ><br>
                        </div>





<br>


                    </div>
                    
                </form>

            </div>

        </div>


    </main>
    <footer class="footer">
        <div class="container">
            <hr>
            <h6 class="title">Scandiweb Test Assignment</h6>
        </div>
    </footer>

    <script src=" <?php echo ASSETS.'js/script.js'; ?>"></script>


</body>

</html>