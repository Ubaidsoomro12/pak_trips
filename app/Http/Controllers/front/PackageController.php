<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class PackageController extends Controller
{
    /**
     * Display the packages page.
     */
    public function index(): View
    {
        return view('pages.packages');
    }
}