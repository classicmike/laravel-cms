<?php

class Post extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'title' => 'required|between:3,255',
		'body' => 'required',
		'uSer_id' => 'integer',
	];

	// Don't forget to fill this array
	protected $fillable = ['title', 'body', 'user_id'];

    public function user(){
        // 'Many Posts belong to a user'
        return $this->belongsTo('User');
    }

}