<?php

namespace App\Models;

class Post
{
    private static $blog_post = [
        [
            'judul' => 'Judul 1',
            'slug' => 'judul-1',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim voluptate rem placeat ratione iste. Ad voluptate ipsam accusantium aliquam eos.'
        ],
        [
            'judul' => 'Judul 2',
            'slug' => 'judul-2',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim voluptate rem placeat ratione iste. Ad voluptate ipsam accusantium aliquam eos.'
        ]

    ];

    private static $aboutData = [
        'name' => 'Ibnu Hamid Aufa Fawwaz',
        'email' => 'aufacb124@gmail.com'
    ];
    static function all()
    {
        return collect(self::$blog_post);
    }

    static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }

    static function about()
    {
        return self::$aboutData;
    }

}
