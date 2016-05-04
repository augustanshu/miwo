<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table="articles";
	
	protected $fillable=[
	 'cate_id',
        'user_id',
        'title',
        'content',
        'tags',
        'new_tags',
        'pic'
	];
}
