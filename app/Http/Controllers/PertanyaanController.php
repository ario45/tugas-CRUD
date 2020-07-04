<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function index(){
        $pertanyaan = PertanyaanModel::get_all();
       
        return view('index', compact('pertanyaan'));

    }
    public function create(){
        return view('form');
    }
    public function store(Request $request){
        
        $pertanyaan = PertanyaanModel::save($request->all());
        
        return redirect('/pertanyaan');
    }
}