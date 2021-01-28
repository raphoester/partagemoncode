<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CodeController extends Controller
{
    public function edit($id){
        $pageDeCode = \App\Models\PageDeCode::find($id);
        return view('pages_de_code/edition')->with('code', $pageDeCode);
    }

    public function liste(){
        $liste = Auth::user()->pages;
        return view('pages_de_code/liste_pages')->with('pages', $liste);
    }

    public function creer(){
        return view('pages_de_code/nouvellePage');
    }
}
