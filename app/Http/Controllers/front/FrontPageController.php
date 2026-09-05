<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class FrontPageController extends Controller
{
    /**
     * Display the home page.
     */
    public function index(): View
    {
        return view('index'); // Loads resources/views/index.blade.php
    }
}