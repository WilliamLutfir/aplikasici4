<?php namespace App\Models;
use CodeIgniter\Model;

class PeoplesModel extends Model{
    protected $table='peoples';
    protected $useTimestamps=true;

    protected $allowedFields=['name','address'];
    
    public function search($search){
        // $builder=$this->table('peoples');
        // $builder->like('name',$search)->orLike('address',$search);
        // return $builder;

        return $this->/*table('peoples')->*/like('name',$search)->orLike('address',$search);
    }
}