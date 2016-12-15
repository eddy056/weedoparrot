<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Weedoparrot extends Model
{
    protected $table= 'weedlist';
    protected $fillable = [
    	    'name',
            'type',
            'description',
            'image'
    ];
}
