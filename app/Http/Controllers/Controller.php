<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function getCategories (): array {

        $categories = [ 'politic', 'sport' , 'media', 'art','society'];

        return $categories;

    }


    public function getNews (): array {

        $faker = Factory::create();

        $news = [];

        $categories = $this->getCategories();
        $idCounter = 1;
        foreach ($categories as $category) {
            for($i = 0 ; $i < 5; $i++ ) {
                $news[] = [
                    'id' => $idCounter,
                    'category' => $category,
                    'title' => $faker->word(),
                    'author' => $faker->userName(),
                    'status' => "PUBLISHED",
                    'description' => $faker->text(),
                    'created_at' =>$faker->dateTime()->format('d-m-Y H:i:s')

                ];
                $idCounter++;
            }
        }

        return $news;

    }
}
