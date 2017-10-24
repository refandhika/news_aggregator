<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Data;
	
class HomeController extends Controller
{
    public function Home(){
        $data = Data::limit(12)->get();
        return view('home', ['data' => $data]);
    }
}
