<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return "hello";
    }
    public function gadjets()
    {
        $data = "Cellphone Laptop Desktop";
        return view('products',compact('data'));
    }
}
