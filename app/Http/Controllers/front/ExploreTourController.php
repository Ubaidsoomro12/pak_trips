<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ExploreTourController extends Controller
{
    /**
     * Display the explore tours page.
     */
    public function index(): View
    {
        return view('pages.explore_tours');
    }
}