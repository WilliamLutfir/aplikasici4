<?php namespace App\Models;
use CodeIgniter\Model;

class ComicsModel extends Model{
    // Konfigurasi model sesuai dgn tabel yg telah dibuat di database
    protected $table='comics';
    protected $useTimestamps=true;
    // Field mana saja yg boleh diisikn oleh user
    protected $allowedFields=['title','slug','author','publisher','cover'];
    
    // Buat method getter sendiri
    public function getComic($slug=false){
        if(!$slug/*===false*/){
            return $this->findAll();
        }else{
            return $this->where(['slug'=>$slug])->first();
        }
    }
}