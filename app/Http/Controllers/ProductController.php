<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /* public function __construct(){
        $this->middleware('auth');
    } */
    public function mostrar(){
        $products = ['pupusa de queso','de frijo','tengo hambre'];
        $proveedores = ['A','B','C'];
        //return view('products/index')->with('products', $products);
        /* return view('products/index')
        ->with('products', $products)->with('proveedores',$proveedores); */
        //return view('products/index',\compact('products'));
        return view('products/index',\compact('products','proveedores'));
        //return 'desde controler';
    }
    public function index()
    {
        return view('products.index');
    }
    public function create()
    {
        return view('products.create');
    }
    public function store(Request $request)
    {
        //dd($request->all);
        $data = $request()->validate([
            'productName' => 'required|min:5|max:50'
        ]);
        DB::table('products')->insert([
            'productName' => $data['productName'],
        ]);
        return view('products.create');
    }
}
