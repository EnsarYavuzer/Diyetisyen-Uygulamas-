<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author Asus
 */
class Controller {
    protected $load=array();
    public function __construct() {
        $this->load=new Load();   
    }
}
