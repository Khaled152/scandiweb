<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/public/css/style.css" rel="stylesheet" type="text/css">
    <title>Scandiweb test Assignment</title>

</head>

<body>
    <div class="container">
        <form id="product_form" action="store" method="POST">
            <div class="row my-5">
                <div class="col-md-6 text-left">
                    <h1>Product Add</h1>
                </div>
                <div class="col-md-6 text-right">
                    <a href="/" name="Cancel" class="btn btn-secondary">
                        CANCEL
                    </a>
                    <button type="submit" value="insert" name="Save" class="btn btn-primary" >
                        SAVE
                    </Button>
                </div>
            </div>
            <hr style="width:100%">
            </br>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">SKU</label>
                <div class="col-sm-3">
                    <input name="sku" type="varchar" class="form-control" id="sku" >
                    
                    <span class="error "></span>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-3">
                    <input name="name" type="varchar" class="form-control" id="name">
            <span class="error"></span>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Price ($)</label>
                <div class="col-sm-3">
                    <input name="price" type="number" class="form-control" id="price">
            <span class="error"></span>
                </div>
            </div>
            <div class="dropdown">
                <label class="col-sm-2 col-form-label">Type Switcher</label>
                <select class="dropdown-toggle" type="button" id="productType" name="productType" style="width: 300px;" onchange="getCall(this.value);">
                    <option value="">Type Switcher</option>
                    <option value="DVD">DVD-Disc</option>
                    <option value="Furniture">Furniture</option>
                    <option value="Book">Book</option><br>
                </select><br><br>
                <span class="error"></span>
            </div><br>


            <div id="DVD" class="controls" style="display: none;">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Size (MB)</label>
                    <div class="col-sm-3">
                        <input name="size" type="number" class="form-control" id="size"><br>
                        <strong>Please, provide disc space in MB</strong>
                    </div>
                </div>
            </div>
            <div for="Dimensions" name="dimensions" id="Furniture" class="controls" style="display: none;">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Height (CM)</label>
                    <div class="col-sm-3">
                        <input name="height" type="number" class="form-control" id="height">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Width (CM)</label>
                    <div class="col-sm-3">
                        <input name="width" type="number" class="form-control" id="width">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Length (CM)</label>
                    <div class="col-sm-3">
                        <input name="length" type="number" class="form-control" id="length"><br>
                        <strong>Please, provide dimensions</strong>
                    </div><br>
                </div>
            </div>
            <div id="Book" class="controls" style="display: none;">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Weight (KG)</label>
                    <div class="col-sm-3">
                        <input name="weight" type="number" class="form-control" id="weight"><br>
                        <strong>Please, provide weight in KG</strong>
                    </div><br>
                </div>
            </div>
        </form></br>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>



    <footer class="footer">
        <div class="container">
            <hr>
            <h6 class="title">Scandiweb Test Assignment</h6>
        </div>
    </footer>



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
        <script src="/public/js/script.js"></script>
       



</body>

</html>