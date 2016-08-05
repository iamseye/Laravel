<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    //
    protected $fillable=[
    	'user_id', //temporary
        'title',
    	'body',
    	'published_at',
    	'tax'
    ];

    //change date to Carbon formate
    protected $dates=['published_at'];

    public function scopePublished($query)
    {
    	$query->where('published_at','<=',Carbon::now());
    }

    public function scopeUnpublished($query)
    {
    	$query->where('published_at','>',Carbon::now());
    }

    public function setPublishedAtAttribute($date)
    {
    	$this->attributes['published_at']=Carbon::parse($date);
    }

    //an article is own by users

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

