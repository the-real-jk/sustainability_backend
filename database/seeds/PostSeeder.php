<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class, 30)->create();
        $this->createTestPost();
    }

    private function createTestPost()
    {
        $post = new Post();
        $post->text = "This is a test. To work or not to work, thats the question ;).";
        $post->users_id = 1;
        $post->save();
    }
}
