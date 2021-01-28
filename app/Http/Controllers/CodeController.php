<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CodeController extends Controller
{
    public function edit($id){
        $pageDeCode = \App\Models\PageDeCode::findOrFail($id);
        return view('pages_de_code/edition')->with('code', $pageDeCode);
    }

    public function maj_pdc(Request $requete, $id){
        $pageDeCode = \App\Models\PageDeCode::findOrFail($id);
        $pageDeCode->contenu = $requete->contenu;
        $pageDeCode->save();
        return $this->edit($id);
    }

    public function liste(){
        $liste = Auth::user()->pages;
        return view('pages_de_code/liste_pages')->with('pages', $liste);
    }

    public function creer(){
        return view('pages_de_code/nouvellePage');
    }

    public function creer_post(Request $requete){
        $page = new \App\Models\PageDeCode;
        $page->titre = $requete->titre;
        $page->user_id = Auth::user()->id;
        $page->save();

        return $this->edit($page->id);
    }
}
