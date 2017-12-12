<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
