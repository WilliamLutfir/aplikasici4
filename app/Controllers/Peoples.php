<?php namespace App\Controllers;
use App\Models\PeoplesModel;
 
class Peoples extends BaseController{
    protected $peoplesModel;
    public function __construct(){
        $this->peoplesModel=new PeoplesModel();
    }
    

    public function index():string{
        // $currentPage=$this->request->getGet('page_peoples')??1;

        // Cari data berdasrkn search
        // $search=$this->request->getPost('search');
        if($this->request->getGet('search')){
            $people=$this->peoplesModel->search($this->request->getGet('search'));
            // $people=$this->peoplesModel->like('name',$this->request->getGet('search'))->orLike('address',$this->request->getGet('search'));
        }else{
            $people=$this->peoplesModel;
        }

        $data=[
            'title'=>'Daftar Orang',                   
            // 'peoples'=>$this->peoplesModel->findAll()
            'peoples'=>$people->paginate(10,'peoples'),
            'pager'=>$this->peoplesModel->pager,
            'currentPage'=>$this->request->getGet('page_peoples')??1
        ];

        return view('peoples/index',$data);
    }
}