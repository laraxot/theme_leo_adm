<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    function login()
    {
        return view('auth.login');
    }

    function register()
    {
        return view('auth.register');
    }

    function save(Request $request)
    {
        //return $request->input();
        $request->validate([
            'legal_entity' => 'required',
            'name' => 'required',
            'surname' => 'required',
            'prefix' => '',
            'phone_number' => 'required',
            'birthday' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:12',
            'via' => 'required',
            'city' => 'required',
            'cap' => 'required',
        ]);

        $user = new User;
        $user->legal_entity = $request->legal_entity;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->prefix = $request->prefix;
        $user->phone_number = $request->phone_number;
        $user->birthday = $request->birthday;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->via = $request->via;
        $user->city = $request->city;
        $user->cap = $request->cap;
        $save = $user->save();

        if ($save) {
            return back()->with('success', 'Registrazione avvenuta con successo');
        } else {
            return back()->with('fail', 'Qualcosa è andato storto, riprova più tardi');
        }
    }

    function check(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12'
        ]);

        if ($request->email != "admin@admin") {

            $userInfo = User::where('email', '=', $request->email)->first();

            if (!$userInfo) {
                return back()->with('fail', 'Indirizzo email errato');
            } else {
                if (Hash::check($request->password, $userInfo->password)) {
                    $request->session()->put('LoggedUser', $userInfo->id);
                    return redirect('profile/dashboard');
                } else {
                    return back()->with('fail', 'Password errata');
                }
            }
        } else {
            $userInfo = User::where('email', '=', $request->email)->first();

            if (Hash::check($request->password, $userInfo->password)) {
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('admin/dashboard');
            } else {
                return back()->with('fail', 'Password errata');
            }
        }
    }

    function logout()
    {
        if (session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        }
    }

    function dashboard()
    {
        $data = ['LoggedUserInfo' => User::where('id', '=', session('LoggedUser'))->first()];
        return view('profile.dashboard', $data);
    }

    function personal_data()
    {
        $data = ['LoggedUserInfo' => User::where('id', '=', session('LoggedUser'))->first()];
        return view('profile.personal_data', $data);
    }

    function change_password()
    {
        $data = ['LoggedUserInfo' => User::where('id', '=', session('LoggedUser'))->first()];
        return view('profile.change_password', $data);
    }

    function address()
    {
        $data = ['LoggedUserInfo' => User::where('id', '=', session('LoggedUser'))->first()];
        return view('profile.address', $data);
    }

    function admin()
    {
        $data = ['LoggedUserInfo' => User::where('id', '=', session('LoggedUser'))->first()];
        return view('admin.dashboard', $data);
    }

    function profilo_aziendale()
    {
        $data = ['LoggedUserInfo' => User::where('id', '=', session('LoggedUser'))->first()];
        return view('admin.profilo_aziendale.dashboard', $data);
    }

    function modify_information(Request $request) {

        $request->validate([
            'store_name' => 'required',
            'store_email' => 'required',
            'store_phone_number' => 'required',
            'store_p_iva' => 'required',
            'store_logo' => 'required',
            'store_address' => 'required',
            'store_maps_url' => 'required',
            'store_maps_api' => 'required',
        ]);

        DB::table('informations')->where('store_id', 1)->update(
            [
            'store_name'=>$request->store_name,
            'store_email'=>$request->store_email,
            'store_phone_number'=>$request->store_phone_number,
            'store_p_iva'=>$request->store_p_iva,
            'store_logo'=>$request->store_logo,
            'store_address'=>$request->store_address,
            'store_maps_url'=>$request->store_maps_url,
            'store_maps_api'=>$request->store_maps_api,
            ],
        );

        return back()->with('success', 'Modifica della categoria avvenuta con successo');;

    }

    function gestione_categorie_madri()
    {
        $data = ['LoggedUserInfo' => User::where('id', '=', session('LoggedUser'))->first()];
        return view('admin.gestione_categorie.categorie_madri', $data);
    }

    function gestione_categorie()
    {
        $data = ['LoggedUserInfo' => User::where('id', '=', session('LoggedUser'))->first()];
        return view('admin.gestione_categorie.dashboard', $data);
    }

    function crea_categoria()
    {
        $data = ['LoggedUserInfo' => User::where('id', '=', session('LoggedUser'))->first()];
        return view('admin.gestione_categorie.crea_categoria', $data);
    }

    function create_category(Request $request)
    {
        //return $request->input();
        $request->validate([
            'name' => 'required',
            'guid' => 'required',
            'img' => '',
            'superior_category_guid' => 'required',
        ]);

        $category = new Category();
        $category->store_id = '1';
        $category->name = $request->name;
        $category->guid = $request->guid;
        $category->img = $request->img;
        $category->superior_category_guid = $request->superior_category_guid;
        $save = $category->save();

        if ($save) {
            return back()->with('success', 'Creazione della categoria avvenuta con successo');
        } else {
            return back()->with('fail', 'Qualcosa è andato storto, riprova più tardi');
        }
    }

    function modify_category(Request $request) {

        $request->validate([
            'name' => 'required',
            'guid' => 'required',
            'img' => '',
            'superior_category_guid' => 'required',
        ]);

        DB::table('categories')->where('guid', $request->guid)->update(
            ['name'=>$request->name,
            'guid'=>$request->guid,
            'img'=>$request->img,
            'superior_category_guid'=>$request->superior_category_guid,
            ],
        );

        return back()->with('success', 'Modifica della categoria avvenuta con successo');;

    }

    function delete_category($guid) {
        DB::table('categories')->where('guid', $guid)->delete();
        return redirect('/admin/gestione_categorie');
    }

    function add_product(Request $request)
    {
        //return $request->input();
        $request->validate([
            'name' => 'required',
            'guid' => 'required',
            'recipes' => 'required',
            'img' => '',
            'price' => 'required',
            'maxi_price' => '',
            'info' => '',
            'category_guid' => '',
            'variant_category_guid' => '',
            'dough_category_guid' => '',
            'warehouse' => '',
            'iva' => '',
            'department' => '',
        ]);

        $product = new Product();
        $product->store_id = '1';
        $product->name = $request->name;
        $product->guid = $request->guid;
        $product->recipes = $request->recipes;
        $product->img = $request->img;
        $product->price = $request->price;
        $product->maxi_price = $request->maxi_price;
        $product->info = $request->info;
        $product->category_guid = $request->category_guid;
        $product->variant_category_guid = $request->variant_category_guid;
        $product->dough_category_guid = $request->dough_category_guid;
        $product->warehouse = $request->warehouse;
        $product->iva = $request->iva;
        $product->department = $request->department;
        $save = $product->save();

        if ($save) {
            return back()->with('success', 'Creazione della categoria avvenuta con successo');
        } else {
            return back()->with('fail', 'Qualcosa è andato storto, riprova più tardi');
        }
    }

    function modify_product(Request $request) {

        $request->validate([
            'name' => 'required',
            //'guid' => 'required',
            'recipes' => 'required',
            'img' => '',
            'price' => 'required',
            'maxi_price' => '',
            'info' => '',
            'category_guid' => '',
            'variant_category_guid' => '',
            'dough_category_guid' => '',
            'warehouse' => '',
        ]);

        DB::table('products')->where('guid', $request->guid)->update(
            ['name'=>$request->name,
             'recipes'=>$request->recipes,
             'img'=>$request->img,
             'price'=>$request->price,
             'maxi_price'=>$request->maxi_price,
             'info'=>$request->info,
             'category_guid'=>$request->category_guid,
             'variant_category_guid'=>$request->variant_category_guid,
             'dough_category_guid'=>$request->dough_category_guid,
             'warehouse'=>$request->warehouse,
            ],
        );

        return back()->with('success', 'Modifica del prodotto avvenuta con successo');;

    }

    function delete_product($guid, $category_guid) {
        DB::table('products')->where('guid', $guid)->delete();
        return redirect('/admin/gestione_categorie/' . $category_guid);
    }

}
