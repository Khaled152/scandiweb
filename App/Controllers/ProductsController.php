<?php 



class ProductsController extends Controller 
{
    private $conn;

    public function __construct()
    {
        $this->conn = new Products();
    }


    public function index()
    {
        $data['products'] = $this->conn->getAllProducts();
        return $this->view('products/index',$data);
    }





    public function add()
    {
        return $this->view('products/add');
    }

    public function store()
    {
        if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
            $sku =$_POST['sku'];
            $price = $_POST['price'];
            $type = $_POST['type'];
            $weight = $_POST['weight'] ?? null;
            $size = $_POST['size'] ?? null;
            $height = $_POST['height'] ?? null;
            $width = $_POST['width'] ?? null;
            $length = $_POST['length'] ?? null;


            $this->conn = new Products();
            $dataInsert = Array ( "name" => $name ,
                            "sku" => $sku ,
                            "price" => $price ,
                            "type" => $type ,
                            "weight" => $weight ,
                            "size" => $size ,
                            "height" => $height ,
                            "width" => $width ,
                            "length" => $length ,
                            );

            if($this->conn->insertProducts($dataInsert))
            {
                $data['success'] = "Data Added Successfully";
                return  header('Location: http://localhost/scandiweb/products/index');
            }
            else 
            {
                $data['error'] = "Error";
                return $this->view('products/add',$data);
            }
        }
        return  header('Location: http://localhost/scandiweb/products/index');
    }




    public function edit($id)
    {
        // var_dump($this->conn->getProduct($id));
        $data['row'] = $this->conn->getProduct($id)[0];
        return $this->view('products/edit',$data);
    }

    public function update()
    {
        if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $qty = $_POST['qty'];
            $id = $_POST['id'];

            $this->conn = new Products();
            $dataInsert = Array ( "name" => $name ,
                            "description" => $description ,
                            "price" => $price ,
                            "qty" => $qty 
                            );
            // data of product
            

            if($this->conn->updateProduct($id,$dataInsert))
            {
                $data['success'] = "Updated Successfully";
                $data['row'] = $this->conn->getProduct($id)[0];
                $this->view('products/edit',$data);
            }
            else 
            {
                $data['error'] = "Error";
                $data['row'] = $this->conn->getProduct($id)[0];
                return $this->view('products/edit',$data);
            }
        }
        redirect('home/index');
    }



    
    public function delete($id)
    {
        if($this->conn->deleteProduct($id))
        {
            $data['success'] = "Product Have Been Deleted";
            return  header('Location:http://localhost/scandiweb/products/index');
            
            
        }
        else 
        {
            $data['error'] = "Error";
            return header('Location: http://localhost/scandiweb/products/index');
        }



        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    foreach ($_POST['product_ids'] as $product_id) {
        $product_controller->delete($product_id);
    }

    header('Location: index.php');
}
    }
}