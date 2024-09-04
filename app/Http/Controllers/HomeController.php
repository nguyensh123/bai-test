<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $productname = products::where('product_name', true);

        return view( view:'layout.home', compact(var_name:'productname'));
    }
    public function contact(){
        return view('layout.contact');
    }
    public function sanpham(){
        return view('layout.sanpham');
    }
}
