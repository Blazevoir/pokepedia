<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pokemon extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $table = 'pokemon';
    protected $fillable = [
        'nombre', 'tipo', 'peso','estatura','foto','ataque'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden =['created_at','updated_at'];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    
    public function posts(){
        return $this->hasMany('App\Post');
    }
}
