<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'posts';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title','body','short_desc','cat_id','status','price','decreased_price','saving'];

    // use SoftDeletes;
    // protected $dates = ['deleted_at'];

    public function category(){

        return $this->belongsTo('App\Categorie');
    }

}
