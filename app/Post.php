<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
         protected $table = 'post';
    protected $fillable = [
        'users_id','asunto','idpokemon','contenido'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
    ];
    
    // public function user(){
    //     return $this->belongsTo('App\User');
    // }
}
