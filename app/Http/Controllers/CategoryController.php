<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show () {

        $categories =  $this->getCategories();

        return view('categories', ['categories' => $categories]);
    }

    public function showByCategory (string $category) {

        $news =  $this->getNews();

        $newsFiltered = array_filter($news, function ($n) use ($category){
            return ($n['category'] = $category);
        });

        return view('current-category', ['current_category' => $category, 'news' => $newsFiltered]);
    }
}
