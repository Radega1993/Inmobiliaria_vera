<?php

    class WebController{


      public function __construct(){

      }

      public function index(){
        require_once("vista/header.php");
        require_once("vista/main.php");
        require_once("vista/footer.php");
      }

      public function contact(){
        require_once("vista/header.php");
        require_once("vista/contact.php");
        require_once("vista/footer.php");
      }

    }
?>
