<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pageDeCode extends Model
{
    protected $fillable = [
        'contenu',
        'user_id',
        'titre',
        'public',
    ];

    public function proprietaire(){
        return $this->belongsTo(User::class, "user_id");
    }
    use HasFactory;
}
