<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
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
            'info' => 'required',
            'category_guid' => '',
            'variant_category_guid' => '',
            'dough_category_guid' => '',
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
        $save = $product->save();

        if ($save) {
            return back()->with('success', 'Creazione della categoria avvenuta con successo');
        } else {
            return back()->with('fail', 'Qualcosa è andato storto, riprova più tardi');
        }
    }

    function modify_product($request, $product_guid) {

        $request->validate([
            'name' => 'required',
            'guid' => 'required',
            'recipes' => 'required',
            'img' => '',
            'price' => 'required',
            'maxi_price' => '',
            'info' => 'required',
            'category_guid' => '',
            'variant_category_guid' => '',
            'dough_category_guid' => '',
        ]);

        /*-----------------------------
        DA FINIRE
        -----------------------------*/

    }
}
