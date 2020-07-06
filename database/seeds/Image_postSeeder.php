<?php

use App\Image;
use Illuminate\Database\Seeder;
use App\Image_post;

class Image_postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Image_post::class, 3)->create();
        $this->createTestAssociation();
    }

    public function createTestAssociation()
    {
        $image_post = new Image_post();
        $image_post->posts_id = 31;
        $image_post->images_id = 1;
        $image_post->save();
    }
}
