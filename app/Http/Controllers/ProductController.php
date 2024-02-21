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
        $data = array(
        "Cellphone" => "Itel",
        "Laptop" => "Apple",
        "Desktop" => "Windows",
        "Tablet" => "Cherrymobile",
        "Wristwatch" => "Versace",
        "VR headset" => "Oculus"
    );
        return view('products',['data' => $data]);
    }
}
