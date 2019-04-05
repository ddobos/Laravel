<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    const table = "posts";
    protected $table = self::table; //
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'title',
        'body',
    ];

    public static function store($title, $body)
    {
        parent::create([
            'user_id'=>Auth::user()->id,
            'title' => $title,
            'body' => $body,

        ]);
    }

    public function user(){
        return $this->belongsTo("App\User");//relatia unul la multe
    }
}
