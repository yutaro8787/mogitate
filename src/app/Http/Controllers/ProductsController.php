<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $items = Products::all();
        return view('products.index', ['items'=>$items]);
    }
    public function add(){
        return view('products.add');
    }
    public function create(Request $request){
        $this->validate($request, Products::$rules);
        $form = $request->all();
        Products::create($form);
        return redirect('/products');
    }
}
