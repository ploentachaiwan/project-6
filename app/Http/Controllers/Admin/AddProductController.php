<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddProductController extends Controller
{
    public function addproduct(){
        return view('admin.product.addproduct');
    }
}
