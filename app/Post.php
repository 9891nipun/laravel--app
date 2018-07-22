<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     protected $table ='posts';

     public $primaryKey = 'id';

     public $timestamps = true;

     public function user_error(){
         return $this->belongsTo('App\User');
     }
}
