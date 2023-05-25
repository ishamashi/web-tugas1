<?php

namespace App\Models;


class Topik 
{
    private static  $blog_post = [
        [
            'title' => 'Judul Blog Pertama',
            'slug' => 'judul-blog-pertama',
            'author' => 'Icho',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque maiores unde aspernatur cum praesentium, quasi natus accusantium rem id mollitia.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque maiores unde aspernatur cum praesentium, quasi natus accusantium rem id mollitia.'
        ],
        [
            'title' => 'Judul Blog Kedua',
            'slug' => 'judul-blog-kedua',
            'author' => 'Ishamashi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos eaque, labore corporis temporibus vitae placeat commodi maiores, beatae possimus amet nihil vero non voluptatum at quo esse hic nisi nesciunt reiciendis! Officia, tenetur. Optio dolores eius quis natus molestiae quibusdam placeat numquam. Expedita vel beatae suscipit officia sed illum iusto.Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos eaque, labore corporis temporibus vitae placeat commodi maiores, beatae possimus amet nihil vero non voluptatum at quo esse hic nisi nesciunt reiciendis! Officia, tenetur. Optio dolores eius quis natus molestiae quibusdam placeat numquam. Expedita vel beatae suscipit officia sed illum iusto.'
        ],
    ];

    public static function all(){
        return collect(self::$blog_post);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
