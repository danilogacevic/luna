<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Photo extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */

    protected $uploads = '/media/';

    protected $table = 'photos';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['file'];

     public function getFileAttribute($photo){

        return $this->uploads . $photo;
    }

    public function post() {

        return $this->hasOne('App\Post');
    }

  

}
