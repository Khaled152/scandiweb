<?php

class Controller{

    public function model($model){
        require_once(dirname(__DIR__).'/Models/'.$model.'.php');
        return new $model();
    }

    public function view($view,$data=[]){
        require_once(dirname(__DIR__).'/Views/'.$view.'.php');
    }
}

/*
$nameErr ="";
$name="";
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_PSOT['name'])){
        $nameErr= "please, Enter name";
    }else{
        $name = input_data($_POST[name]);
        if(!preg_match("/^[a-zA-Z]*$/",$name)){
            $nameErr="Only fucking ALphabet and white spaces";
        }
    }
}

function input_data($data){
    $data = trim($data);
    $data= stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}*/