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

    // public static function update($id, $title, $body)
    // {
    //     parent::update([
    //         'id' => $id,
    //         '$title' => $title,
    //         'body' => $body
    //     ]);
    // }
}
