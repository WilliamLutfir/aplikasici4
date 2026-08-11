<?php namespace App\Controllers;

class Materi extends BaseController{
    public function index():string{
        return view('daftar_materi');
    }
    public function introcodeigniter4():string{
        return view('intro_codeigniter4');
    }
    public function persiapandninstalasi():string{
        return view('persiapan_dn_instalasi');
    }
    public function strukturfolderdnenvironment():string{
        return view('struktur_folder_dn_environment');
    }
    public function routesdncontrollers():string{
        return view('routes_dn_controllers');
    }
    public function view5():string{
        return view('view5');
    }
    public function viewlayouts():string{
        return view('view_layouts');
    }
    public function modeI():string{
        return view('modeI');
    }
    public function model2():string{
        return view('model2');
    }
    public function insertdata():string{
        return view('insert_data');
    }
    public function vaIidation():string{
        return view('vaIidation');
    }
    public function deletednedit():string{
        return view('delete_dn_edit');
    }
    public function uploadfile():string{
        return view('upload_file');
    }
    public function migrationseederfaker():string{
        return view('migration_seeder_faker');
    }
    public function paginationdnsearching():string{
        return view('pagination_dn_searching');
    }
}
