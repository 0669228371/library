<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable =['name'];

    public function Books(){
        return $this->hasMany('App\Book');
    }
}
