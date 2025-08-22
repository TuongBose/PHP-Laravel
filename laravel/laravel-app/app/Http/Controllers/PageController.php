<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('page.index');
    }

    public function about()
    {
        $name = "Tuong";
        // $names=array('Tuong','Jesica','David','Taylor');
        $names=[];
        //return view('page.about')->with('name', $name);
        return view('page.about',[
            'names'=>$names,
        ]);
    }
}
