<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author Asus
 */
class Admin extends Controller {
    public function __construct(){
        parent::__construct();
    }
    public function login(){
        
        Session::int();
        if(Session::get("login")==true){
             header("Location:".SITE_URL."/panel/home");
        }
        $this->load->view("Admin/loginForm");
        
    }
    public function runLogin(){
        $kullanici_adi=$_POST["kullanici_adi"];
        $pasword =$_POST["sifre"];
        
        $data=array(
            "kullanici_adi"=>$kullanici_adi,
            "sifre"=>$pasword
        );
        
        //Veritabanı işlemleri
        $admin_model=$this->load->model("admin_model");
        $result=$admin_model->userKontrol($data);
       
        if($result==false){
            //Yanlış bilgiler giridi
            header("Location:".SITE_URL."/admin/login");  
        } else {
            
             Session::int();
             Session::set("login", true);
             Session::set("username", $result[0]["kullanici_adi"]);
             Session::set("userid", $result[0]["Id"]);
             Session::set("userrol", $result[0]["rol"]);
             header("Location:".SITE_URL."/Panel/home");  
        }
       
    }
    public function logout(){
        Session::int();
        Session::destroy();
        header("Location:".SITE_URL."/admin/login");  
    }
    
}
