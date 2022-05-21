<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }

class Posts
{
    private static $blog_post = [
        [
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'author' => 'Subhan Fadilah',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit aperiam veniam fugit consequatur quos laudantium
                    culpa eos odio reiciendis officia autem assumenda molestias ratione, nulla odit labore magni distinctio omnis?'
        ],
        [
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'author' => 'Lestari',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit consequatur sit dicta quo aspernatur magnam explicabo quaerat temporibus, quod pariatur neque in culpa voluptatum libero ea expedita aperiam voluptatibus deserunt fuga asperiores. Praesentium dolores sit laboriosam, error quo neque eos ipsam accusantium molestias tempora tenetur maxime, minima quod at cumque facere? Esse iure dolores dignissimos illum obcaecati, explicabo sequi doloribus eius tempora dolore vitae, sed, nobis modi distinctio. Id necessitatibus nostrum veniam sed tempora iste ea sint error illo ad, at eius qui quaerat, accusamus aspernatur eos, ipsa magni. Minima vitae maxime quisquam praesentium modi tempore perspiciatis odio cupiditate aliquam!'
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}