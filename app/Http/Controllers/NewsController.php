<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function show()
    {
        $news = $this->getNews();

        return view('all-news', [
            'news' => $news
        ]);

    }

    public function getNewsById(int $id)
    {

        $news = $this->getNews();

        foreach ($news as $n) {
            if ($n['id'] = $id) {
                $currentNews = $n;
                break;
            };
        }

        return view('current-news',[
            'current_news' => $currentNews
        ]);
    }
}
