<?php

namespace App\Http\Controllers;

use App\Models\Reader;

class PageController extends Controller
{
    public function index()
    {
        $popular_author = (new Reader())->popularAuthor();
        $gold_reader = (new Reader())->goldReader();

        return view('template.default.pages.index', [
            'popular_author' => $popular_author[0],
            'gold_reader' => $gold_reader[0]
        ]);
    }
}
