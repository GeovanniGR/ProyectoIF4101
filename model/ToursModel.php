<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ToursModel
 *
 * @author geova
 */
class ToursModel {

    public function __construct() {
        
    }

// constructor

    public function calcular($cantidad) {
        $total = $cantidad * 7000;
        return $total;
    }


    public function calcularfamilia($residentes, $noresidentes) {
        $total=0;
        if ($residentes === 0) {
            $total= $noresidentes * 2500;
        } else if ($noresidentes === 0) {
            $total= $residentes * 1000;
        } else {
            $total= $residentes * 1000 + $noresidentes * 2500;
        }
        return $total;
    }

}
