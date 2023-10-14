<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Arif Roziqin",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, minima ratione accusamus nisi eaque facilis aut dolor voluptate! Minima fuga cumque ipsam laborum debitis ullam deleniti perferendis minus nisi facere, beatae at, rerum repudiandae odit placeat eveniet explicabo dolorum voluptatum vitae aut ducimus quod! Cum, at totam quod sunt et dolore voluptatum maiores eaque provident, debitis assumenda magnam ipsam similique ducimus illum esse adipisci a nostrum cumque quidem! Modi qui repellendus nemo facilis sapiente dignissimos neque unde reiciendis amet totam.",
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Rizqi Nurul",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quaerat, labore assumenda magnam facere rerum delectus amet, alias nostrum quasi beatae necessitatibus. Ipsum repellat deserunt ducimus illo exercitationem earum, explicabo quia odit blanditiis mollitia pariatur, natus quam a modi possimus hic? Atque reiciendis beatae vitae nulla omnis animi dignissimos, magnam sunt iure assumenda fugiat laudantium harum libero autem nesciunt tenetur commodi et, fuga maxime consectetur quis saepe neque minima. Praesentium earum numquam, architecto quisquam, optio quidem soluta vitae atque omnis minima veritatis doloribus odio quod, eos maxime dolorum delectus mollitia sunt! Debitis error modi autem architecto! Corrupti, accusamus nisi obcaecati architecto porro, voluptates exercitationem dicta facilis inventore tempore sapiente necessitatibus et, deleniti eum dignissimos error maxime temporibus sed ut totam!",
        ],
        [
            "title" => "Judul Post Ketiga",
            "slug" => "judul-post-ketiga",
            "author" => "Rizqon Khasani",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quaerat, labore assumenda magnam facere rerum delectus amet, alias nostrum quasi beatae necessitatibus. Ipsum repellat deserunt ducimus illo exercitationem earum, explicabo quia odit blanditiis mollitia pariatur, natus quam a modi possimus hic? Atque reiciendis beatae vitae nulla omnis animi dignissimos, magnam sunt iure assumenda fugiat laudantium harum libero autem nesciunt tenetur commodi et, fuga maxime consectetur quis saepe neque minima. Praesentium earum numquam, architecto quisquam, optio quidem soluta vitae atque omnis minima veritatis doloribus odio quod, eos maxime dolorum delectus mollitia sunt! Debitis error modi autem architecto! Corrupti, accusamus nisi obcaecati architecto porro, voluptates exercitationem dicta facilis inventore tempore sapiente necessitatibus et, deleniti eum dignissimos error maxime temporibus sed ut totam!",
        ],
    ];


    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug); //  cari data dimana slugnya sama dengan slug yang dipilih
    }
}
