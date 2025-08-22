<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // how to pass data to view?
        // Option 1: compact => sen multiple variables
        $title = 'Laravel Course from Le Manh Tuong';
        $x = 1;
        $y = 2;
        // return view('product.index', compact('title','x','y')); // pass data to view (compact)

        // Option 2: with => method can only send 1 parameter
        $name = 'Tuong';
        //return view('product.index')->with('name', $name); // giống key => value

        // send a associative array
        $myphone = [
            'name' => 'Iphone 14 pro max',
            'year' => 2022,
            'isFavorited' => true
        ];
        // return view('product.index', compact('myphone'));
        // send directly
        // return view('product.index', ['myphone' => $myphone]);
        print_r(route('products'));
        return view('product.index');
    }

    public function getProductById($id)
    {
        return 'This is product id = ' . $id;
        // return view ('product.index',[
        //     'product'=>[
        //         'name'=>'Iphone 15 pro',
        //         'year'=>2024
        //     ],
        // ]);
    }

    public function getProductByName($name)
    {
        $phone = [
            'Iphone X' => 'Iphone X',
            'Samsung' => 'Samsung',
            'Lenovo' => 'Lenovo'
        ];
        return view('product.index', [
            'products' => $phone[$name] ?? 'Unknown product'
        ]);
    }

    public function  getProductByNameAndId($name, $id)
    {
        return 'product name = ' . $name . ', product id = ' . $id;
    }
}
