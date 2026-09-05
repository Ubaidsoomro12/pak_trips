<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class BlogController extends Controller
{
    /**
     * Display the blog page.
     */
    public function index(): View
    {
        return view('pages.blog');
    }
}