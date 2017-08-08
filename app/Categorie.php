<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Categorie extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cat_title'];

    
    protected $dates = ['deleted_at'];

    

    public function posts() {

        return $this->hasMany('App\Post');
    }

}
