<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tweet extends Model
{
	 public function user(){
        return $this->belongsTo('App\User');
    }

    public $table     =  'tweets';
    public $fillable  =  ['content'];

    use SoftDeletes;
}
