<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Panel
 *
 * @author Asus
 */
class Panel extends Controller {
    public function __construct() {
        parent::__construct();
        //Oturum Kontrolü
        Session::int();
        if(Session::get("login")==false){
            Session::destroy();
             header("Location:".SITE_URL."/admin/login");
        }
     //   echo Session::get("username");
    }
    public function home(){
        $data["homepage"]=array(
            "username"=> Session::get("username"),
            "userrol"=> Session::get("userrol")
        );
        /*
        Session::set("username", $result[0]["kullanici_adi"]);
             Session::set("userid", $result[0]["Id"]);
             Session::set("userrol", $result[0]["rol"]);
        */
        $this->load->view("Panel/home",$data);
    }
    
    
}
