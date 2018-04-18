<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PrincipalController
 *
 * @author Usuario
 */
class PrincipalController {
    private $controller;
    private $model;
    
     public function invoke() {
         
         if (isset($_GET['formulario1'])){
            require_once 'controller/Formulario1Controller.php';
            $this->controller = new Formulario1Controller();
            $this->controller->invoke();
            
         }//if formulario
        /* elseif (($_GET['formulario2'])){
             
         }*/
         
         else{
             include 'view/Formulario1View.php';
         }
     }
}
