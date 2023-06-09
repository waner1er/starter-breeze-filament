<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index', ['pages' => \App\Models\Page::all()]);
    }

    public function show(\App\Models\Page $page)
    {
        return view('pages.show', ['page' => $page]);
    }
}
