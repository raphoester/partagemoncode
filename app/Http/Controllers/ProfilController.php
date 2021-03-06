<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\pageDeCode;
use App\Models\User as User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Mail\Mailer;
class ProfilController extends Controller
{

    public function profil($id)
    {
        $user = \App\Models\User::findOrFail($id);
        $liste = Auth::user()->pages;
        $liste = $liste->sortByDesc('updated_at')->chunk(3)[0];

        return view('profils/profil')->with("profil", $user)->with("connecte", auth()->user())->with('pages', $liste);

    }




    public function page_modif_profil()
    {   
        $user = auth()->user();
        return view('profils/modifprofil', ['user' => $user]);
    }
    

    public function delete($id){

        $del = \App\Models\pageDeCode::findOrFail($id);


        $del->delete();
        return back();

    }



    public function updateprofil(Mailer $email)
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

        $email->send('emails.modifprofil', ['username' => $user->name], function($message) use($user){

            

            $message->to($user->email)->from('partagemoncode@gmail.com')->subject('Changement des informations confidentielles');

        });


        

        return view('profils/modifprofil', ['profil' => $user])->with("connecte", auth()->user());
    }
}
