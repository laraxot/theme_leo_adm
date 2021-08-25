<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SearchController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/information', function () {
    return view('information');
});

Route::get('category/{guid}', function ($guid) {
    return view('category_page')->with(['guid' => $guid]);
});

Route::get('product/{guid}', function ($guid) {
    return view('product_page')->with(['guid' => $guid]);
});

Route::get('search', [SearchController::class, 'search'])->name('web.search');



Route::get('/account', function () {
    return view('login');
});

Route::post('/auth/save', [MainController::class, 'save'])->name('auth.save');
Route::post('/auth/check', [MainController::class, 'check'])->name('auth.check');
Route::get('/auth/logout', [MainController::class, 'logout'])->name('auth.logout');

Route::post('/admin/gestione_categorie/crea_categoria/save', [MainController::class, 'create_category'])->name('admin.create_category');

Route::post('/admin/gestione_categorie/aggiungi_prodotto/save', [MainController::class, 'add_product'])->name('admin.add_product');

Route::post('/admin/modifica_prodotto', [MainController::class, 'modify_product'])->name('admin.modify_product');
//Route::get('/profile/dashboard', [MainController::class, 'dashboard']);

Route::group(['middleware' => ['AuthCheck']], function () {
    Route::get('/auth/login', [MainController::class, 'login'])->name('auth.login');
    Route::get('/auth/register', [MainController::class, 'register'])->name('auth.register');

    Route::get('/profile/dashboard', [MainController::class, 'dashboard']);
    Route::get('/profile/personal_data', [MainController::class, 'personal_data']);
    Route::get('/profile/change_password', [MainController::class, 'change_password']);
    Route::get('/profile/address', [MainController::class, 'address']);
    Route::get('/admin/dashboard', [MainController::class, 'admin']);
    Route::get('/admin/gestione_categorie', [MainController::class, 'gestione_categorie']);
    Route::get('/admin/gestione_categorie/crea_categoria', [MainController::class, 'crea_categoria']);
    
    Route::get('/admin/gestione_categorie/aggiungi_prodotto/{guid}', function ($guid) {
        return view('admin.gestione_categorie.aggiungi_prodotto')->with(['guid' => $guid]);
    });

    Route::get('/admin/gestione_categorie/{guid}', function ($guid) {
        return view('admin.gestione_categorie.gestione_prodotti')->with(['guid' => $guid]);
    });

    Route::get('/admin/modifica_prodotto/{guid}', function ($guid) {
        return view('admin.gestione_categorie.modifica_prodotto')->with(['guid' => $guid]);
    });
});



Route::get('/example', function () {
    return 'Hello World!!!';
});

Route::get('/user', function () {
    return view('user', ['name' => 'Jhon']);
});

Route::get('/select', function () {
    $superior_categories = DB::select('select * from superior_categories where store_id = 1');
    foreach ($superior_categories as $superior_category) {
        echo $superior_category->name . '<br>' . '<img src="' . $superior_category->img . '">';
    }
});

