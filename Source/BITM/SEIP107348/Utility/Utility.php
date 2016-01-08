<?php

namespace App\BITM\SEIP107348\Utility;



class Utility {

    public $message = "";
    
    static public function d($param = false) {
        echo '<pre>';
        var_dump($param);
        echo '</pre>';
    }
    
    static public function dd($param = false){
        Self::d($param);
        var_dump($param);
        die();
    }
    
    static public function redirect($url="BITM_Atomic_Project/Views/SEIP107348/File/index.php"){
        header("Location:".$url);
    }
    
    public function message($message = NULL){
        if(is_null($message)){
            $_message = $_SESSION['message'];
            $_SESSION['message'] = null;
            return $_message;
        }  else {
            $_SESSION['message'] = $message;
            var_dump($_SESSION);
//            die();
        }
    }
}
