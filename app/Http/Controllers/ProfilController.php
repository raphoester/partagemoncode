<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;
class ProfilController extends Controller
{

    public function profil($id)
    {
        $user = \App\Models\User::findOrFail($id);
        return view('profils/profil', ['user' => $user]);
    }

    public function page_modif_profil()
    {   
        $user = auth()->user();
        return view('profils/modifprofil', ['user' => $user]);
    }
    
    public function updateprofil()
    {
        $user = User::find(auth()->user()->id);

        $colonnes = ['name', 'email'];
        foreach($colonnes as $attribut){
            if(request($attribut) != null) {
                $user->$attribut = request($attribut);
            }
        }

        if(request('mdpconfi') != null && request('mdpnv') != null && request('mdpconfi') == request('mdpnv')) 
        {
            $user->password = bcrypt(request('mdpnv'));
        }

        $user->save();
        return view('profils/modifprofil', ['profil' => $user])->with("connecte", auth()->user());
    }
}
