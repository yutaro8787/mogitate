<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsSeasonController extends Controller
{
    public function index(){
        $items = ProductsSeason::all();
        return view('productsseason.index', ['items'=>$items]);
    }
    public function add(){
        return view('productsseason.add');
    }
    public function create(Request $request){
        $this->validate($request, ProductsSeason::$rules);
        $form = $request->all();
        ProductsSeason::create($form);
        return redirect('/productsseason');
    }
}
