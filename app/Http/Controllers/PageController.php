<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class PageController extends Controller{

    public function hello(){
        $name = 'Vitaliy';
        return view('home', ['name' => $name]);
    }

    public function about(){
        $data['full_name'] = "Ezgor Vitaliy";
        $data['day'] = "02.11.00";
        $data['town'] = "Varash";
        $data['year'] = 19;
        /*$data = [];*/
        return view('about', ['data' => $data]);
    }

    public function auto($id){
        $audi = new Car($id);
        return view('auto', ['audi' => $audi]);
    }

    public function submit(Request $req){
        $validation = $req->validate([
            'name' => 'required|min:5|max:10',
            'email' => 'required',
            'message' => 'required|min:5|max:100'
        ]);
        dd($validation);
    }
}
