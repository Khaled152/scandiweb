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
        return $this->view('products/index', $data);
    }





    public function add()
    {

        return $this->view('products/add');
    }

    public function store()
    {





        $name = $_POST['name'];
        $sku = $_POST['sku'];

        $price = $_POST['price'];

        $type = $_POST['type'];


        $weight = $_POST['weight'] ?? null;
        $size = $_POST['size'] ?? null;
        $height = $_POST['height'] ?? null;
        $width = $_POST['width'] ?? null;
        $length = $_POST['length'] ?? null;


        $this->conn = new Products();
        $dataInsert = array(
            "name" => $name,
            "sku" => $sku,
            "price" => $price,
            "type" => $type,
            "weight" => $weight,
            "size" => $size,
            "height" => $height,
            "width" => $width,
            "length" => $length,
        );


        if ($this->conn->insertProducts($dataInsert)) {
            header("Content-Type: application/json");
            echo json_encode(["success" => true]);
            exit();
        } else {
            header("Content-Type: application/json");
            echo json_encode(["success" => false]);
            exit();
        }
    }










    public function delete($id)


    {






        if ($this->conn->deleteManyProducts($id)) {

            // $data['success'] = "Product Have Been Deleted";
            $arr = ["success" => true];
            header("Content-Type: application/json");
            echo json_encode($arr);
            exit();
        } else {
            $data['error'] = "Error";
            return header('Location: http://localhost/scandiweb/products/index');
        }
    }
}
