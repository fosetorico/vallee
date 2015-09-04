<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function index(){
        return view('welcome');
    }
    public function about(){
        $people = [];    //['Val','Jonah','Saint'];

        $data = [];
        $data['first'] = 'Vallee';
        $data['last'] = 'Real';
        // $name = '<span style="color: red;">Vallee</span>';
        return view('pages.about', $data, compact('people'));
    }


}
