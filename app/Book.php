<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'slug', 'author' , 'description'];
    // protected $guarded = ['id', 'created_at', 'updated_at'];

    // public function getRouteKeyName(){
    //   return 'slug';
    // }

}
