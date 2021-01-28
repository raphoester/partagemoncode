<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User as User;
use Illuminate\Contracts\Mail\Mailer;
class ProfilController extends Controller
{

    public function profil($id)
    {
        $utilisateurRequis = User::findOrFail($id);
        return view('profils/profil')->with("profil", $utilisateurRequis)->with("connecte", auth()->user());
    }




    public function page_modif_profil()
    {   
        $user = auth()->user();
        return view('profils/modifprofil', ['user' => $user]);
    }
    //



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
