<?php

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset posts table
        DB::table('posts')->truncate();
        factory(Post::class, 10)->create();
    }
}
