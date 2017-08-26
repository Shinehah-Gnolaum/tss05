<?php

namespace App;

use Carbon\Carbon;

class Post extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    public function addComment()
    {
    	$this->comments()->create([

    		'body' => request()->body,
            'user_id' => auth()->user()->id

    	]);
    }

    public function scopeFilter($query, $filters)
    {
        if ($month = $filters['month']) {

            $query->whereMonth('created_at', Carbon::parse($month)->month);

        } else {

            $query->whereMonth('created_at', Carbon::parse(Carbon::now())->month);

        }

        if ($year = $filters['year']) {

            $query->whereYear('created_at', Carbon::parse($year)->year);

        } else {

            $query->whereYear('created_at', Carbon::parse(Carbon::now())->year);

        }

    }

    public static function archives()
    {
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
        ->groupBy('year', 'month')
        ->orderByRaw('created_at desc')
        ->get()
        ->toArray();
    }
}
