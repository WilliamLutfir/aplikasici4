<?php namespace App\Controllers;
use App\Models\ComicsModel;
 
class Comics extends BaseController{
    protected $comicsModel;
    public function __construct(){
        $this->comicsModel=new ComicsModel();
        
    }
    

    public function index():string{
        // $comicsModel=new \App\Models\ComicsModel();
        // $comicsModel=new ComicsModel();
        
        $data=[
            'title'=>'Daftar Komik',
                                       // Mirip dgn, SELECT * FROM NamaTabel
            'comics'=>/*$this->comicsModel->findAll()*/ /*$this->comicsModel->select('id,cover,title,slug')->get()->getResultArray()*/ $this->comicsModel->getComic()
        ];

        // Cara terkoneksi dgn database tanpa model
        // $db=\Config\Database::connect();
        // $c0mic=$db->query("SELECT * FROM comics");
        // foreach($c0mic->getResultArray() as $r){d($r);}

        return view('comics/index',$data);
    }
    public function detail($slug):string{
        $data=[
            'title'=>'Detail Komik',
            'comic'=>$this->comicsModel->getComic($slug)
        ];
        // Jika komik tdk ada di tabel
        if(empty($data['comic'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Judul komik $slug tidak ditemukan!",404);
        }

        return view('comics/detail',$data);
    }
    public function create(){
        // session();
        $data=[
            'title'=>'Form Tambah Komik'/*,
            'validation'=>\Config\Services::validation()*/
        ];
        return view('comics/create',$data);
    }
    public function save(){
        // Validasi input HTML
        if(!$this->validate([
            // Sesuai dgn atribut name pd elemen input
            'title'=>[/*'required|is_unique[comics.title]'*/
                                      // Yg harus unik, di field mna & di tabel mna?
                'rules'=>'required|is_unique[comics.title]',
                'errors'=>[
                    'required'=>'Judul komik harus di isi, tidak boleh kosong!',
                    'is_unique'=>'Judul komik sudah terdaftar!'
                ]
            ],
            'author'=>[
                'rules'=>'required',
                'errors'=>['required'=>'Penulis komik harus di isi, tidak boleh kosong!']
            ],
            'publisher'=>[
                'rules'=>'required',
                'errors'=>['required'=>'Penerbit komik harus di isi, tidak boleh kosong!']
            ],              // Nama field di tabel didlm database
            'cover'=>[
                'rules'=>/*'uploaded[cover]|'.*/'max_size[cover,1024]|is_image[cover]|mime_in[cover,image/jpg,image/jpeg,image/png,image/webp]',
                'errors'=>[
                    /*'uploaded'=>'Sampul komik harus ada, tidak boleh kosong!',*/
                    'max_size'=>'Ukuran gambar tidak boleh dari 1MB!',
                    'is_image'=>'Format gambar harus jpg, jpeg, png, webp!',
                    'mime_in'=>'Yang anda pilih bukan gambar!'
                ]
            ]
        ])){
            // $validation=\Config\Services::validation();
            $validation=$this->validator->getErrors();
                                                                        // Sekalian kirimkn juga semua value input yg sdh diisi sebelumnya
                                                                        // (value input yg sdh diisi sebelumnya itu tersimpan didlm variabel superglobal session). 
            return redirect()->to(getenv('app_baseURL').'/comics/create')->withInput()->with('validation',$validation);
                                                                                           // nama key-nya adalah 'validation'
        }
        
        // Ambil gambarnya
        $fileCover=$this->request->getFile('cover');
        // Cek, apakah tdk ada gambar yg diupload
        if($fileCover->getError()===4){
            $nameFileCover='Default.PNG';
        }else if($fileCover->getError()===0){
            // Generate nama file gambar menjdi random
            $nameFileCover=$fileCover->getRandomName();
            // Pindahkn file ke folder img
            $fileCover->move('img',$nameFileCover);
        }
        
        // Ambil nama file gambarnya
        // $nameFileCover=$fileCover->getName();

        $this->comicsModel->save([
                                  // Utk mengambil data dari variabel super global $_GET atau $_POST
            'title'=>$this->request->/*getVar()*/getPost('title'),
            'slug'=>url_title($this->request->getPost('title'),'-',true),
            'author'=>$this->request->getPost('author'),
            'publisher'=>$this->request->getPost('publisher'),
            'cover'=>$nameFileCover
        ]);

        // Buat flash data
        session()->setFlashdata('message',"<span>Komik bernama <u>{$this->request->getPost('title')}</u> <b>berhasil</b> ditambahkan!</span>");

        return redirect()->to(getenv('app_baseURL').'/comics');
    }
    public function delete($id){
        // Cari gambar berdsrkn id
        $getCoverNtitle=$this->comicsModel->select('cover,title')->where('id',$id)->first();
        // Cek jika file gambarnya default
        ($getCoverNtitle['cover']!='Default.PNG')?
        // Hapus gambar dari direktori aplikasi kita
        unlink('img/'.$getCoverNtitle['cover']):'';

                         // Method bawaan punya CodeIgniter
        $this->comicsModel->delete($id);

        // $title=$this->comicsModel->select('title')->where('id',$id)->first()['title'];
        session()->setFlashdata('message',"<span>Komik bernama <u>{$getCoverNtitle['title']}</u> <b>berhasil</b> dihapus!</span>");

        return redirect()->to(getenv('app_baseURL').'/comics');
    }
    public function edit($slug){
        $data=[
            'title'=>'Form Edit Komik',
            /*'validation'=>\Config\Services::validation()*/
            'comic'=>$this->comicsModel->getComic($slug)
        ];
        return view('comics/edit',$data);
    }
    public function update($id){
        $oldComic=$this->comicsModel->getComic($this->request->getPost('slug'));
        if($oldComic['title']===$this->request->getPost('title')){
            $ruleTitle='required';
        }else{
            $ruleTitle='required|is_unique[comics.title]';
        }

        if(!$this->validate([
            'title'=>[
                'rules'=>$ruleTitle,
                'errors'=>[
                    'required'=>'Judul komik harus di isi, tidak boleh kosong!',
                    'is_unique'=>'Judul komik sudah terdaftar!'
                ]
            ],
            'author'=>[
                'rules'=>'required',
                'errors'=>['required'=>'Penulis komik harus di isi, tidak boleh kosong!']
            ],
            'publisher'=>[
                'rules'=>'required',
                'errors'=>['required'=>'Penerbit komik harus di isi, tidak boleh kosong!']
            ],
            'cover'=>[
                'rules'=>'max_size[cover,1024]|is_image[cover]|mime_in[cover,image/jpg,image/jpeg,image/png,image/webp]',
                'errors'=>[
                    'max_size'=>'Ukuran gambar tidak boleh dari 1MB!',
                    'is_image'=>'Format gambar harus jpg, jpeg, png, webp!',
                    'mime_in'=>'Yang anda pilih bukan gambar!'
                ]
            ]
        ])){
            // $validation=$this->validator->getErrors();

            return redirect()->to(getenv('app_baseURL')."/comics/edit/{$this->request->getPost('slug')}")->withInput()/*->with('validation',$validation)*/;
        }

        $fileCover=$this->request->getFile('cover');
        // Cek gambar, apakah tetap menggunakn gambar lama
        if($fileCover->getError()===4){
            $nameFileCover=$this->request->getPost('oldcover');
        }else if($fileCover->getError()===0){
            // Generate nama file gambar menjdi random
            $nameFileCover=$fileCover->getRandomName();
            // Pindahkn file ke folder img
            $fileCover->move('img',$nameFileCover);
            // Cek jika file gambarnya default
            ($oldComic['cover']!='Default.PNG')?
            // hapus file gambar lama
            unlink('img/'.$this->request->getPost('oldcover')):'';
        }

        $this->comicsModel->save([
            // CodeIgniter sudah tau, jika kita mengisi field 'id', itu artinya kita ingin update data.
            'id'=>$id,
            'title'=>$this->request->getPost('title'),
            'slug'=>url_title($this->request->getPost('title'),'-',true),
            'author'=>$this->request->getPost('author'),
            'publisher'=>$this->request->getPost('publisher'),
            'cover'=>$nameFileCover
        ]);

        // $oldTitle=$oldComic['title'];
        // if($oldTitle===$this->request->getPost('title')){
        //     $messageSentence="<span>Komik bernama <u>{$this->request->getPost('title')}</u> <b>berhasil</b> diubah!</span>";
        // }else{
        //     $messageSentence="<span>Komik bernama <u>$oldTitle</u> <b>berhasil</b> diubah menjadi <u>{$this->request->getPost('title')}</u>!</span>";
        // }

        // Buat flash data
        session()->setFlashdata('message',/*$messageSentence*/
            ($oldComic['title']===$this->request->getPost('title'))?"<span>Komik bernama <u>{$this->request->getPost('title')}</u> <b>berhasil</b> diubah!</span>":"<span>Komik bernama <u>{$oldComic['title']}</u> <b>berhasil</b> diubah menjadi <u>{$this->request->getPost('title')}</u>!</span>"
        );

        return redirect()->to(getenv('app_baseURL').'/comics');
    }
}
