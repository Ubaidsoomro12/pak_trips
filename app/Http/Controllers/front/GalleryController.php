<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class GalleryController extends Controller
{
    /**
     * Display the gallery page.
     */
    public function index(): View
    {
        return view('pages.gallery');
    }
}