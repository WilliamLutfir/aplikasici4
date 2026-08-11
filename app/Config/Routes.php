<?php use CodeIgniter\Router\RouteCollection;
/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');


// $routes->get('/coba','Coba::index');
      // add() hampir mirip dgn get() (disarankn gunakn method request yg sesuai!)
// $routes->add('/coba/about','Coba::about');
                      // Dsbt dgn Placeholders, yaitu menentukn tipe data apa yg boleh dikirimkn pd controller method
// $routes->get('/coba/about/(:any)/(:num)','Coba::about/$1/$2');
                                                  // mengambil placeholder yg pertama
                // tanpa tulis method about di url                                
// $routes->get('/coba/(:segment)/(:num)','Coba::about/$1/$2');
                                      // menjlnkn method about, tanpa dituliskn di url, dgn cara memanggil lgsg dari class controller coba method about
                                      // tdk memanggil controller & method, tetapi menjlnkn closure/callback
// $routes->add('/coba/closureataucallback',function(){
    // echo 'Ini menjlnkn closure/callback.';
// });
                    // Arahkn ke folder/namespace Admin
// $routes->get('/users','Admin\Users::index');


$routes->get('/','Pages::index');
$routes->get('/about','Pages::about');
$routes->get('/contact','Pages::contact');
$routes->get('/comics','Comics::index');
$routes->get('/comics/create','Comics::create');
$routes->get('/comics/edit/(:segment)','Comics::edit/$1');
$routes->post('/comics/update/(:num)','Comics::update/$1');
$routes->post('/comics/save','Comics::save');
$routes->delete('/comics/(:num)','Comics::delete/$1');
$routes->get('/comics/(:any)','Comics::detail/$1');
$routes->get('/peoples','Peoples::index');
// $routes->post('/peoples','Peoples::index');


$routes->get('/materi','Materi::index');
$routes->get('/materi/introcodeigniter4','Materi::introcodeigniter4');
$routes->get('/materi/persiapandninstalasi','Materi::persiapandninstalasi');
$routes->get('/materi/strukturfolderdnenvironment','Materi::strukturfolderdnenvironment');
$routes->get('/materi/routesdncontrollers','Materi::routesdncontrollers');
$routes->get('/materi/view5','Materi::view5');
$routes->get('/materi/viewlayouts','Materi::viewlayouts');
$routes->get('/materi/modeI','Materi::modeI');
$routes->get('/materi/model2','Materi::model2');
$routes->get('/materi/insertdata','Materi::insertdata');
$routes->get('/materi/vaIidation','Materi::vaIidation');
$routes->get('/materi/deletednedit','Materi::deletednedit');
$routes->get('/materi/uploadfile','Materi::uploadfile');
$routes->get('/materi/migrationseederfaker','Materi::migrationseederfaker');
$routes->get('/materi/paginationdnsearching','Materi::paginationdnsearching');