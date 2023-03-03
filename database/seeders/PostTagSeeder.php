<?php

namespace Database\Seeders;

use App\Models\PostTag;
use Illuminate\Database\Seeder;

class PostTagSeeder extends Seeder
{
    public function run()
    {
        PostTag::factory()->count(10)->create();

    }
}
