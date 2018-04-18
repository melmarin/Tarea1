<?php

Namespace model;

require_once 'core/Conexion.php';

class Formulario1Model {

    private $sql;
    private $cadena;
    private $datos;
    private $con;
    private $ec;
    private $or;
    private $ca;
    private $ea;

    public function __construct() {
        $this->con = new \core\Conexion();
    }

//ctor

    public function set($atributo, $contenido) {
        $this->$atributo = $contenido;
    }

//set

    public function get($atributo) {
        return $this->$atributo;
    }

//get 

    public function calcularDistanciaEuclides($arrayEC, $arrayOR, $arrayCA, $arrayEA) {

        $this->ec = $arrayEC['c5'] + $arrayEC['c9'] + $arrayEC['c13'] +
                $arrayEC['c17'] + $arrayEC['c25'] + $arrayEC['c29'];

        $this->or = $arrayOR['c2'] + $arrayOR['c10'] + $arrayOR['c22'] +
                $arrayOR['c26'] + $arrayOR['c30'] + $arrayOR['c34'];

        $this->ca = $arrayCA['c7'] + $arrayCA['c11'] + $arrayCA['c15'] +
                $arrayCA['c19'] + $arrayCA['c31'] + $arrayCA['c35'];

        $this->ea = $arrayEA['c4'] + $arrayEA['c12'] + $arrayEA['c24'] +
                $arrayEA['c28'] + $arrayEA['c32'] + $arrayEA['c36'];

        $this->sql = "SELECT CA, EC, EA, 'OR', Estilo FROM `datostarea1`";
        $this->datos = $this->con->consultaRetorno($this->sql);
        foreach ($this->datos as $fila) {
            print_r($fila);
        }

        
        
        
        return "Exitoso la suma es: " ;
        
        
    }

}
