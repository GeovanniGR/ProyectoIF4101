<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ToursController
 *
 * @author geova
 */
class ToursController {

    public function __construct() {
        $this->view = new View();
    }

    public function mostrar() {
        $this->view->show("toursView.php", "Mostrando");
    }

    public function mostrardescuento() {
        $this->view->show("promocionView.php", "Mostrando");
    }

    public function mostrarfamiliares() {
        $this->view->show("familiaresView.php", "Mostrando");
    }

    public function mostrarvarios() {
        $this->view->show("variosTourView.php", "Mostrando");
    }

    public function calcular1() {
        require 'model/ToursModel.php';
        $calcular = new ToursModel();
        $calcular->calcular($_POST['cantidad']);
        $data = array("todo bien");
        $this->view->show("promocionView.php", $data);
    }

    public function calcular2() {
        require 'model/ToursModel.php';
        $calcular = new ToursModel();
        $calcular->calcular($_POST['cantidad2']);
        $data = array("todo bien");
        $this->view->show("promocionView.php", $data);
    }

    public function calcularfamilia() {
        require 'model/ToursModel.php';
        $calcular = new ToursModel();
        $calcular->calcularfamilia($_POST['cantidad'], $_POST['noresidentes']);
        $data = array("todo bien");
        $this->view->show("familiaresView.php", $data);
    }

    public function calcularfamilia2() {
        require 'model/ToursModel.php';
        $calcular = new ToursModel();
        $calcular->calcularfamilia($_POST['cantidad2'], $_POST['noresidentes2']);
        $data = array("todo bien");
        $this->view->show("familiaresView.php", $data);
    }

}
