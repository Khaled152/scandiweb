
<?php

class Home extends Controller{
  private $model;

  public function __construct() {
      require_once( dirname(__DIR__).'/Models/Product.php');
      require_once (dirname(__DIR__).'/Config/config.php');

      $this->model = new Product($pdo);
  }
    public function index(){
      $data['total'] =$this->model->all();
      
      $this->view('product-list',$data);
    }


    public function add(){
      $this->view('product-add');
    }

    public function store(){
     // session_start();
      try{
        
      $id = $this->model->create($_POST);
 
      echo '<script>window.location.href="/"</script>';
    }
  catch(Exception $e){
      echo $e;
      echo '<script>window.location.href="/"</script>';

  }
  
  }

  public function delete($id)
  {
      
   // var_dump($id);
    $this->model->delete($id);
    //echo "jkhsdkjashdkjashdkhasdjkgjhfgasdjfhglaksjdfhlkasdjhfgjhasdkfl";
   
    echo '<script>window.location.href="/scandiweb/"</script>';
   // header('Location: /index');   

  }




}
 
