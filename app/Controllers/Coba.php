<?php namespace App\Controllers;

class Coba extends BaseController{
    public function index(){
        echo 'Ini controller Coba method index.';
    }
    public function about($nam3='',$oId=0){
        echo "Halo, nama saya {$this->n4me} $nam3, saya berumur $oId tahun.";
    }
    
}
