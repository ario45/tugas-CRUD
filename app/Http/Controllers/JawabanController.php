<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;


class JawabanController extends Controller
{
    // public function index(Request $pertanyaan_id){
      
    //     $jawaban = JawabanModel::find_pertanyaan_id($pertanyaan_id);
        
    //     return view('jawaban.index', compact('jawaban'));
    // }
    public function store($pertanyaan_id, Request $request){
        $data = $request->all();
        unset($data["_token"]);
        JawabanModel::save($data);

        return redirect('/pertanyaan');
    }
}
