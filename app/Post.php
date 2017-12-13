<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    protected $fillable = ['title','body','user_id'];

    public function comment(){
    	return $this->hasMany(Comment::class);
    }

    public function addComment($body){
    	/*Comment::create([
    		'post_id' => $this->id,
    		'body' => $body   		
    	]);*/
    	
    	$this->comment()->create(compact('body'));
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query,$filters){

        if($month = $filters['month']){
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if($year = $filters['year']){
            $query->whereYear('created_at', $year);
        }
    }

    public static function archives(){
        return static::selectRaw('year(created_at) as year, monthname(created_at) as month, count(*) as published')
            ->groupBy('year','month')
            ->orderByRaw('min(created_at) desc')
            ->get()->toArray();
    }
}
