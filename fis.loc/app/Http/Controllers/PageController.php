<?php

namespace App\Http\Controllers;

use App\Models\Reader;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $popular_author = (new Reader())->popularAuthor();

        return view('template.default.pages.index', [
            'popular_author' => $popular_author[0]
        ]);
    }
}
