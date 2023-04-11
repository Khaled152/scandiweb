<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product add</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="<?php echo ASSETS . 'css/style.css'; ?>" rel="stylesheet" type="text/css">
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

                    <button onclick="submit()" type="submit" name="submit" class="btn btn-success">SAVE</button>
                    <button type="button" class="btn btn-secondary" id="Cancel" onclick="window.location.href='<?php url('products/index'); ?>';">Cancel</button>
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
                <form class="p-5 border mb-5" id="myform">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="sku">SKU</label>
                        <input type="text" class="form-control" name="sku" id="sku">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" name="price" id="price">
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <select type="select" class="form-control" name="type" id="type">
                            <option>choose..</option>
                            <option value="book">Book</option>
                            <option value="DVD">DVD</option>
                            <option value="furniture">Furniture</option>
                        </select>







                        <div id="book_fields" style="display: none;">
                            <label for="weight">Weight(KG):</label>
                            <input type="number" id="weight" name="weight" min="0" step="0.01"><br>
                        </div>

                        <div id="dvd_fields" style="display: none;">
                            <label for="size">Size(MB):</label>
                            <input type="number" id="size" name="size"><br>
                        </div>

                        <div id="furniture_fields" style="display: none;">
                            <label for="height">Height:</label>
                            <input type="number" id="height" name="height" min="0" step="0.01"><br>

                            <label for="width">Width:</label>
                            <input type="number" id="width" name="width" min="0" step="0.01"><br>

                            <label for="length">Length:</label>
                            <input type="number" id="length" name="length" min="0" step="0.01"><br>
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



    <script src=" <?php echo ASSETS . 'js/script.js'; ?>"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

    <script>
        function isEmpty() {

            let result = false

            $.each($("input[type=text]:visible,input[type=number]:visible"), function(key, valueObj) {

                if (valueObj.value == "")

                    result = true




            });


            return result;
        }

        // Add click event listener to the button
        function submit() {


            if (isEmpty() || $("#type").val() == 'choose..') {
                alert("Please enter all fileads !!")
                return
            }



            data = {
                "name": $('#name').val(),
                "price": $('#price').val(),
                "sku": $('#sku').val(),
                "type": $('#type').val(),
                "weight": $('#weight').val(),
                "size": $('#size').val(),
                "height": $('#height').val(),
                "width": $('#width').val(),
                "length": $('#length').val()

            }


            $.post("<?php url('products/store'); ?>", data, function() {

                }).done(function(data) {
                    if (data.success)
                        window.location.href = "<?php url('products/index'); ?>?message=Product is added successfuly !!"

                })
                .fail(function() {
                    alert("error");
                })



        }


        /*

        myform.addEventListener('submit', function() {
            alert("enn")
            // Get all the checked checkboxes
            var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
            console.log(checkboxes)
            // Create an array to store the IDs of the checked rows
            var formData = new FormData(myform)
            var params = {};
            formData.forEach(function(value, key) {
                object[key] = value;
            });

            var ids = [];
            let urlEncodedData = "",
                urlEncodedDataPairs = [],
                name;



            for (name in params) {
                urlEncodedDataPairs.push(encodeURIComponent(name) + '=' + encodeURIComponent(params[name]));
            }

            // Loop through the checkboxes and add their ID values to the array

            //console.log(`<?php url('products/delete'); ?>/${ids.join(",")}`)
            // Send an AJAX request to the server to delete the rows with the selected IDs
            var xhr = new XMLHttpRequest();

            xhr.open('POST', `<?php url('products/store'); ?>`, true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.send(params);


            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        x = JSON.parse(xhr.response)
                        if (x.success) {

                            for (checkBox of checkboxes) {
                                checkBox.parentElement.parentElement.parentElement.remove()
                            }
                            toastr.success("Products are deleted successfuly!")

                        }
                        
                                                // Display a success message
                                                for (checkBox of checkboxes) {
                                                    checkBox.parentElement.parentElement.parentElement.remove()
                                                }
                                                bootstarpAlert.insertAdjacentHTML("beforeEnd", `<div class="alert alert-danger alert-dismissible show fade px-5 mx-5 mt-3" role="alert">
                                        <strong>Deleted !</strong> Products are deleted successfuly.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>`)

                        
        }
        else {
            // Display an error message
            alert('Error: ' + xhr.statusText);
        }
        }
        };
        });

        */
    </script>



</body>

</html>