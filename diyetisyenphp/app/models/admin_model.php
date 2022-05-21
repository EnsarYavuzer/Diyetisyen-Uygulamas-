<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin_model
 *
 * @author Asus
 */
class admin_model extends Model  {
    public function __construct()
    {
        parent::__construct();
    }
    public function userKontrol($data= array()) {
        $sql="SELECT * FROM users where kullanici_adi = :kullanici_adi AND sifre = :sifre"; 
        $count=$this->db->affectedRows($sql,$data);
        if($count>0){
          $sql="SELECT * FROM users Where kullanici_adi = :kullanici_adi AND sifre= :sifre";
          return $this->db->select($sql,$data);
          
        }else{
            return false;;
        }
            //   return $this->db->select("SELECT * FROM 'users' ORDER BY id DESC");
            //   $sth = $this->db->query("SELECT * FROM users");;
            //   $dizi = $sth->fetchAll();
           //return $dizi;
           // return $this->db->select("users","id>2");
            
            
          //  $sql="SELECT * FROM users WHERE id= :id";
          //  $params = array(":id" => $id);
          //  return $this->db->select($sql,$params);
               return $this->db->select("SELECT * FROM users");
              // $sth = $this->db->query("SELECT * FROM users");
               //$dizi = $sth->fetchAll();
               //return $dizi;
           
            
        }
        public function diyetisyenEkle($data) {
            
            return $this->db->insert("users",$data);
        }
        public function hastalikEkle($data) {
            return $this->db->insert("hastaliklar",$data);
        }
         public function hastaListele() {
            $sql="SELECT * FROM hasta";
            return $this->db->select($sql);
        }
        public function hastaEkle($data) {
            return $this->db->insert("hasta",$data);
        }
        
        public function diyetisyenGuncelle($data) {
            
            return $this->db->update("users",$data);
        }
          public function hastalikListele() {
            $sql="SELECT * FROM hastaliklar";
            return $this->db->select($sql);
        }
	public function getAllrecords()
	{
		return $this->db->select("SELECT * FROM `mvc` ORDER BY id DESC");
	}
	public function submit_index($data)
	{
		$this->db->insert('mvc', $data);
	}
	
}


	