<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics_array = config('comics');

        foreach($comics_array as $single_comic){
            $new_comic = new Comic();
            $new_comic->title = $single_comic['title'];
            $new_comic->description = $single_comic['description'];
            $new_comic->thumb = $single_comic['thumb'];
            $new_comic->price = $single_comic['price'];
            $new_comic->series = $single_comic['series'];
            $new_comic->sale_date = $single_comic['sale_date'];
            $new_comic->type = $single_comic['type'];
            $new_comic->save();
        }
    }
}
