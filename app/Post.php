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
    protected $fillable = ['title','body','photo_id','short_desc','categorie_id','address','transport','whats_included','status','price','decreased_price','saving'];

    // use SoftDeletes;
    // protected $dates = ['deleted_at'];

    public function categorie(){

        return $this->belongsTo('App\Categorie');
    }

    public function photo(){

        return $this->belongsTo('App\Photo');
    }

}
