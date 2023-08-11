<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class ArticleTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = Article::all();
        foreach ($articles as $article) {

            $tags = Tag::pluck('id', 'name')->random(random_int(1, 6))->toArray();

            $article->tags()->attach($tags);
        }
    }
}
