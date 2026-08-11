<?php namespace App\Controllers;

use Faker\Factory;

class Pages extends BaseController{
    public function index():string{
        $faker = Factory::create('id_ID');

        $data=[
            'title'=>'Halaman Beranda',
            'fruits'=>['Apel','Jeruk','Anggur'],
            'name'=>$faker->name()
        ];
        // echo view('layout/header',$data);
        return view('pages/home',$data);
        // echo view('layout/footer');
    }
    public function about():string{
        $data=[
            'title'=>'Halaman Tentang'
        ];
        // echo view('layout/header',$data);
        return view('pages/about',$data);
        // echo view('layout/footer');
    }
    public function contact():string{
        $data=[
            'title'=>'Halaman Kontak Saya',
            'address'=>[
                [
                    'type'=>'Rumah',
                    'address'=>'Jl. Tirta Kencana, Hutan, Percut Sei Tuan, Kabupaten. Deli Serdang, Sumatera Utara, Id, 20371',
                    'city'=>'Medan'
                ],
                [
                    'type'=>'Kantor',
                    'address'=>'Jl. ABC No. 123',
                    'city'=>'Medan'
                ]
            ]
        ];
        return view('pages/contact',$data);
    }
}
