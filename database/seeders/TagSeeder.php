<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $tags = [
                ['name' => 'Design'],
                ['name' => 'Marketing'],
                ['name' => 'Business'],
                ['name' => 'Education'],
                ['name' => 'SEO'],
                ['name' => 'Consalting']

            ];
            Tag::insert($tags);
    }
}
