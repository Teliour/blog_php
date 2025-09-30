<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostTableSeeder extends Seeder
{
    public function run()
    {
        Post::create([
            'author_id' => 1,
            'title' => 'Самый первый пост',
            'excerpt' => 'Краткое описание',
            'image' => null,
            'body' => 'Очень прикольно',
        ]);
         Post::create([
            'author_id' => 2,
            'title' => 'Самый второй пост',
            'excerpt' => 'Краткое описание',
            'image' => null,
            'body' => 'Не очень прикольно',
        ]);
         Post::create([
            'author_id' => 3,
            'title' => 'Ищу друзей',
            'excerpt' => 'очень одиноко',
            'image' => null,
            'body' => 'Привет! давайте общяться!',
        ]);
         Post::create([
            'author_id' => 4,
            'title' => 'Посоветуйте фильм на вечер',
            'excerpt' => 'Краткое описание',
            'image' => null,
            'body' => 'Хочу с женой глянуть',
        ]);
         Post::create([
            'author_id' => 5,
            'title' => 'В чём проблема?',
            'excerpt' => 'Помогите!!',
            'image' => null,
            'body' => 'Я ничего не понял',
        ]);

        Post::factory()->count(5)->create();
    }
}