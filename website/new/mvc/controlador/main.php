<?php
    require_once("./model/model.php");

    class WebController{

      private $model;

      public function __construct(){
        $this->model = new DataBase();
      }

      public function index(){
        require_once("vista/header.php");
        require_once("vista/main.php");
        require_once("vista/footer.php");
      }

      public function find(){
        require_once("vista/header.php");
        require_once("vista/find.php");
        require_once("vista/footer.php");
      }

      public function inmueble(){
        require_once("vista/header.php");
        require_once("vista/inmuebles.php");
        require_once("vista/footer.php");
      }

      public function contact(){
        require_once("vista/header.php");
        require_once("vista/contact.php");
        require_once("vista/footer.php");
      }

      public function login(){
        //require_once("vista/header.php");
        require_once("vista/login.php");
        //require_once("vista/footer.php");
      }

      public function signin($request_params){
        $this->$bd->signIn($request_params['username'], $request_params['password']);
      }

      public function insert(){
        require_once("vista/backend/insert.php");
      }
    }
?>
