<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SearchController extends Controller
{
    function search(Request $request)
    {
        if (isset($_GET['query'])) {
            $search_text = $_GET['query'];
            $products = DB::table('products')->where('name', 'LIKE', '%'.$search_text.'%')->orWhere('recipes', 'LIKE', '%'.$search_text.'%')->paginate(500);
            return view('search',['products'=>$products]);
        } else {
            return view('search');
        }
    }
}
