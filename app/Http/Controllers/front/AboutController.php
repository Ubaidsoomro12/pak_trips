<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class AboutController extends Controller
{
    /**
     * Display the about page.
     */
    public function index(): View
    {
        return view('pages.about');
    }
}