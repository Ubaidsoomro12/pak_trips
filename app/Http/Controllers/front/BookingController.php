<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class BookingController extends Controller
{
    /**
     * Display the booking page.
     */
    public function index(): View
    {
        return view('pages.booking');
    }
}