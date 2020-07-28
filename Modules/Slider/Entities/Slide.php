<?php

namespace Modules\Slider\Entities;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
	protected $table = 'slides';
    protected $fillable = [
    	'title',
    	'image',
    	'link'
    ];
}
