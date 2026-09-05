<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class TravelGuideController extends Controller
{
    /**
     * Display the travel guides page.
     */
    public function index(): View
    {
        return view('pages.traveler');
    }
}