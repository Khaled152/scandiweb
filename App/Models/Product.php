<?php

class Product {
    
    private $pdo;
    public function __construct($pdo) {

        $this->pdo = $pdo;
    }

    public function all() {
        $stmt = $this->pdo->prepare('SELECT * FROM products');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $stmt = $this->pdo->prepare('SELECT * FROM products WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data) {
            $test="INSERT INTO products (name, sku, price, type, weight, size, height, width, length) VALUES (:name , :sku , :price , :type , :weight, :size,:height, :width, :length)";
            
            

        $stmt = $this->pdo->prepare($test);
       $stmt->execute([
        ':name'=>$data['name'],
       ':sku'=>$data['sku'],
       ':price'=>$data['price'],
       ':type'=>$data['type'],
       ':weight'=>!empty($data['weight']) ? $data['weight'] :NULL,
       ':size'=>!empty($data['size']) ? $data['size'] :NULL,
       ':height'=>!empty($data['height']) ? $data['height'] :NULL,
       ':width'=>!empty($data['width']) ? $data['width'] : NULL,
       ':length'=>!empty($data['length']) ? $data['length'] :NULL,
       
       ]);
       
        return $this->pdo->lastInsertId();
               
    }

   //".$data['name'].','.$data['sku'].','.$data['price'].','.$data['type'].','.$data['size']."

    public function update($id, $data) {
        $stmt = $this->pdo->prepare('UPDATE products SET name = ?, description = ?, price = ? WHERE id = ?');
        $stmt->execute([$data['name'], $data['description'], $data['price'], $id]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM products WHERE id IN  (".implode(',',$id).")");
        $stmt->execute();

}



}
