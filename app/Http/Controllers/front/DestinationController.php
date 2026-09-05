<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class DestinationController extends Controller
{
    /**
     * Display the destinations page.
     */
    public function index(): View
    {
        return view('pages.destinations');
    }
}