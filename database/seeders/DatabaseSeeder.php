<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       

        User::create([
            'name' => "Arif Roziqin",
            'username'=> 'arif',
            'email' => 'arifroziqin2505@gmail.com',
            'password' => bcrypt('12345')
        ]);
        // User::create([
        //     'name' => "Rizqy Nurul K.",
        //     'email' => 'rizqy@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal', 
            'slug' => 'personal'
        ]); 

        Category::create([
            'name' => 'Web Design', 
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae, cupiditate?',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam, necessitatibus eligendi porro sint veniam corporis cumque maxime aliquam suscipit modi quam ipsum? Ipsa, ab ea recusandae praesentium natus obcaecati vitae voluptatibus maiores consectetur dolor error fugiat accusantium voluptas minima est blanditiis! Praesentium nemo eum reiciendis labore quaerat fuga cupiditate illo exercitationem in saepe. Error, eum repellendus voluptates ratione harum cumque placeat delectus vel dolores molestiae aliquam provident fuga quis animi illum alias? Iure, ad. Incidunt eos, repellat expedita ea hic, minus natus velit non explicabo quis est a pariatur. Doloribus soluta facilis deleniti officiis quos neque laboriosam odit tenetur minima.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste explicabo aut omnis possimus. Tempore illo doloribus asperiores eligendi fugiat assumenda distinctio sunt ipsa expedita magni officiis, aspernatur amet similique adipisci vel nam a cupiditate dolor iste incidunt laborum suscipit eaque modi quis? Pariatur velit deleniti soluta et! Delectus, esse reprehenderit!</p>',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae, cupiditate?',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam, necessitatibus eligendi porro sint veniam corporis cumque maxime aliquam suscipit modi quam ipsum? Ipsa, ab ea recusandae praesentium natus obcaecati vitae voluptatibus maiores consectetur dolor error fugiat accusantium voluptas minima est blanditiis! Praesentium nemo eum reiciendis labore quaerat fuga cupiditate illo exercitationem in saepe. Error, eum repellendus voluptates ratione harum cumque placeat delectus vel dolores molestiae aliquam provident fuga quis animi illum alias? Iure, ad. Incidunt eos, repellat expedita ea hic, minus natus velit non explicabo quis est a pariatur. Doloribus soluta facilis deleniti officiis quos neque laboriosam odit tenetur minima.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste explicabo aut omnis possimus. Tempore illo doloribus asperiores eligendi fugiat assumenda distinctio sunt ipsa expedita magni officiis, aspernatur amet similique adipisci vel nam a cupiditate dolor iste incidunt laborum suscipit eaque modi quis? Pariatur velit deleniti soluta et! Delectus, esse reprehenderit!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae, cupiditate?',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam, necessitatibus eligendi porro sint veniam corporis cumque maxime aliquam suscipit modi quam ipsum? Ipsa, ab ea recusandae praesentium natus obcaecati vitae voluptatibus maiores consectetur dolor error fugiat accusantium voluptas minima est blanditiis! Praesentium nemo eum reiciendis labore quaerat fuga cupiditate illo exercitationem in saepe. Error, eum repellendus voluptates ratione harum cumque placeat delectus vel dolores molestiae aliquam provident fuga quis animi illum alias? Iure, ad. Incidunt eos, repellat expedita ea hic, minus natus velit non explicabo quis est a pariatur. Doloribus soluta facilis deleniti officiis quos neque laboriosam odit tenetur minima.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste explicabo aut omnis possimus. Tempore illo doloribus asperiores eligendi fugiat assumenda distinctio sunt ipsa expedita magni officiis, aspernatur amet similique adipisci vel nam a cupiditate dolor iste incidunt laborum suscipit eaque modi quis? Pariatur velit deleniti soluta et! Delectus, esse reprehenderit!</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae, cupiditate?',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam, necessitatibus eligendi porro sint veniam corporis cumque maxime aliquam suscipit modi quam ipsum? Ipsa, ab ea recusandae praesentium natus obcaecati vitae voluptatibus maiores consectetur dolor error fugiat accusantium voluptas minima est blanditiis! Praesentium nemo eum reiciendis labore quaerat fuga cupiditate illo exercitationem in saepe. Error, eum repellendus voluptates ratione harum cumque placeat delectus vel dolores molestiae aliquam provident fuga quis animi illum alias? Iure, ad. Incidunt eos, repellat expedita ea hic, minus natus velit non explicabo quis est a pariatur. Doloribus soluta facilis deleniti officiis quos neque laboriosam odit tenetur minima.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste explicabo aut omnis possimus. Tempore illo doloribus asperiores eligendi fugiat assumenda distinctio sunt ipsa expedita magni officiis, aspernatur amet similique adipisci vel nam a cupiditate dolor iste incidunt laborum suscipit eaque modi quis? Pariatur velit deleniti soluta et! Delectus, esse reprehenderit!</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);


    }
}
