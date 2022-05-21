<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use \App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // User::create([
        //     'name' => 'Subhan Fadilah',
        //     'email' => 'subhanfadilah9@mail.com',
        //     'password' => bcrypt('123')
        // ]);


        // User::create([
        //     'name' => 'Lisda Lestari',
        //     'email' => 'lisdalestari@mail.com',
        //     'password' => bcrypt('123')
        // ]);


        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        User::factory(5)->create();

        Post::factory(25)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, odio quos, cum consequuntur explicabo eligendi obcaecati ea voluptas nihil perferendis tempora enim nobis exercitationem repellendus quo magnam dignissimos minus mollitia ullam neque?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, odio quos, cum consequuntur explicabo eligendi obcaecati ea voluptas nihil perferendis tempora enim nobis exercitationem repellendus quo magnam dignissimos minus mollitia ullam neque? Beatae atque aliquam animi, tempora, veniam, explicabo excepturi quasi nulla consequatur accusamus placeat magnam. Exercitationem, et voluptas consectetur, ullam quisquam magni repellat vero odit eos impedit hic consequuntur. Maxime voluptate quod consectetur, quis eos nemo eligendi, atque animi ipsum suscipit dolore possimus enim quos vitae rem pariatur laudantium, at veritatis impedit id minima reiciendis libero cum sed? Nesciunt nostrum reiciendis vero eum voluptatibus ut distinctio autem quisquam laudantium.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, odio quos, cum consequuntur explicabo eligendi obcaecati ea voluptas nihil perferendis tempora enim nobis exercitationem repellendus quo magnam dignissimos minus mollitia ullam neque?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, odio quos, cum consequuntur explicabo eligendi obcaecati ea voluptas nihil perferendis tempora enim nobis exercitationem repellendus quo magnam dignissimos minus mollitia ullam neque? Beatae atque aliquam animi, tempora, veniam, explicabo excepturi quasi nulla consequatur accusamus placeat magnam. Exercitationem, et voluptas consectetur, ullam quisquam magni repellat vero odit eos impedit hic consequuntur. Maxime voluptate quod consectetur, quis eos nemo eligendi, atque animi ipsum suscipit dolore possimus enim quos vitae rem pariatur laudantium, at veritatis impedit id minima reiciendis libero cum sed? Nesciunt nostrum reiciendis vero eum voluptatibus ut distinctio autem quisquam laudantium.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, odio quos, cum consequuntur explicabo eligendi obcaecati ea voluptas nihil perferendis tempora enim nobis exercitationem repellendus quo magnam dignissimos minus mollitia ullam neque?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, odio quos, cum consequuntur explicabo eligendi obcaecati ea voluptas nihil perferendis tempora enim nobis exercitationem repellendus quo magnam dignissimos minus mollitia ullam neque? Beatae atque aliquam animi, tempora, veniam, explicabo excepturi quasi nulla consequatur accusamus placeat magnam. Exercitationem, et voluptas consectetur, ullam quisquam magni repellat vero odit eos impedit hic consequuntur. Maxime voluptate quod consectetur, quis eos nemo eligendi, atque animi ipsum suscipit dolore possimus enim quos vitae rem pariatur laudantium, at veritatis impedit id minima reiciendis libero cum sed? Nesciunt nostrum reiciendis vero eum voluptatibus ut distinctio autem quisquam laudantium.',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, odio quos, cum consequuntur explicabo eligendi obcaecati ea voluptas nihil perferendis tempora enim nobis exercitationem repellendus quo magnam dignissimos minus mollitia ullam neque?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, odio quos, cum consequuntur explicabo eligendi obcaecati ea voluptas nihil perferendis tempora enim nobis exercitationem repellendus quo magnam dignissimos minus mollitia ullam neque? Beatae atque aliquam animi, tempora, veniam, explicabo excepturi quasi nulla consequatur accusamus placeat magnam. Exercitationem, et voluptas consectetur, ullam quisquam magni repellat vero odit eos impedit hic consequuntur. Maxime voluptate quod consectetur, quis eos nemo eligendi, atque animi ipsum suscipit dolore possimus enim quos vitae rem pariatur laudantium, at veritatis impedit id minima reiciendis libero cum sed? Nesciunt nostrum reiciendis vero eum voluptatibus ut distinctio autem quisquam laudantium.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}