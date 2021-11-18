<?php

use Illuminate\Database\Seeder;
use App\Tag;
use Illuminate\Support\Str;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['vegan', 'gluten free', 'lactose free', 'sugar free', 'palm oil free', 'bio'];
        
        foreach($tags as $tag) {
            $newTag = new Tag();
            $newTag->name = $tag;
            $newTag->slug = Str::of($tag)->slug('-');
            $newTag->save();
        }
    }
}
