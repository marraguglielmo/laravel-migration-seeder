<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }

    public function tickets(){

        $trains = Train::paginate(20);
        return view('tickets', compact('trains'));
    }
}
