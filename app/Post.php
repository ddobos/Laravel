<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    const table = "posts";
    protected $table = self::table; //
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'body',
    ];

    public static function store($title, $body)
    {
        parent::create([
            'title' => $title,
            'body' => $body,
        ]);
    }
}
