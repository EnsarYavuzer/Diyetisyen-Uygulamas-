<?php
class index extends Controller{
    public function __construct() {
        parent::__construct(); 
        Session::int();
        if(Session::get("login")==false){
            Session::destroy();
             header("Location:".SITE_URL."/admin/login");
        }
    }
    public function anasayfa() {
        $this->load->view("anasayfa");
       // $indexmodel = $this->load->model("index_model");
    }
    public function kullaniciListele($id=null) {
        $indexmodel = $this->load->model("index_model");
        $data["kullaniciListele"]=$indexmodel->kullaniciListele($id);
        $this->load->view("kullaniciListele",$data);
    }
    
    public function dEkle() {
        $this->load->view("diyetisyenEkle");
    }
    
    public function diyetisyenEkle() {
        $diyetisyen=$_POST["kullanici_adi"];
        $sifre=$_POST["sifre"];
        $rol=$_POST["rol"];
        $data=array(
            "kullanici_adi" =>  $diyetisyen,
            "sifre" => $sifre,
            "rol" => $rol
        );
        $indexmodel = $this->load->model("index_model");
        $eklendi=$indexmodel->diyetisyenEkle($data);
        
        $data["kullaniciListele"]=$indexmodel->kullaniciListele();
        $this->load->view("kullanicieklendi",$data);
    }
    public function diyetisyenGuncelle() {
        $data=array(
            "kullanici_adi" => "diyetisyen",
            "sifre" => "Ayse",
            "rol" => "1234"
        );
        $indexmodel = $this->load->model("index_model");
        $data["kullaniciListele"]=$indexmodel->diyetisyenGuncelle($data);
        $this->load->view("kullaniciListele",$data);
    }
    public function hEkle() {
       $this->load->view("hatalikEkle");
    }

    public function hastalikEkle() {
        $hastalik_adi=$_POST["hastalik_adi"];
        $data=array(
            "hastalik" =>  $hastalik_adi
        );
        $indexmodel = $this->load->model("index_model");
        $eklendi=$indexmodel->hastalikEkle($data);
        //if($eklendi==1){
        $data["hastalikListele"]=$indexmodel->hastalikListele();
        $this->load->view("hastalikEklendi",$data);
       // }else{
       //     echo 'eklenemedi';
        //}
    }
    public function hastalikListele() {
        $indexmodel = $this->load->model("index_model");
        $data["hastalikListele"]=$indexmodel->hastalikListele();
        $this->load->view("hastalikListele",$data);
    }
    public function hasEkle() {
        $this->load->view("hastaEkle");
    }
    public function hastaEkle() {
        $adi=$_POST["adi"];
        $soyadi=$_POST["soyadi"];
        $kimlik = $_POST["kimlik"];
        $dtarih=$_POST["dtarih"];
        $data= array(
            "ad" => $adi,
             "soyad" =>$soyadi,
             "TC" =>$kimlik,
             "Dtarih" =>  $dtarih
             );
        $indexmodel = $this->load->model("index_model");
        $eklendi=$indexmodel->hastaEkle($data);
        //if($eklendi==1){
        $data["hastaListele"]=$indexmodel->hastaListele();
        $this->load->view("hastaEklendi",$data);
    }
    public function diyeEkle() {
        $this->load->view("diyetEkle");
    }
     public function diyetEkle() {
        $diyet_adi=$_POST["diyet_adi"];
       
        $data=array(
            "diyet" =>  $diyet_adi
        );
        $indexmodel = $this->load->model("index_model");
        $eklendi=$indexmodel->diyetEkle($data);
        
        $data["diyetListele"]=$indexmodel->diyetListele();
        $this->load->view("diyeteklendi",$data);
    }
    public function diyetAta() {
        $indexmodel = $this->load->model("index_model");
        $data["diyetListele"]=$indexmodel->diyetListele();
        $data["hastaListele"]=$indexmodel->hastaListele();
        $this->load->view("diyetAta",$data);
    }
    public function diyetRapor() {
        $indexmodel = $this->load->model("index_model");
        $data["diyetListele"]=$indexmodel->diyetListele();
        $data["hastaListele"]=$indexmodel->hastaListele();
        $this->load->view("diyetRapor",$data);
    }   
}
