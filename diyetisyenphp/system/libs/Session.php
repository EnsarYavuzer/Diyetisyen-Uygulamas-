<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Session
 *
 * @author Asus
 */
class Session {
    public static function int() {
        session_start();
    }
    public static function set ($key,$val){
        
        $_SESSION[$key]=$val;
    }
    public static function get ($key){
        if(isset($_SESSION[$key])){
            return $_SESSION[$key];
        }else{
            return false;
        }
    }
    public static function destroy() {
        session_destroy();
    }
}
