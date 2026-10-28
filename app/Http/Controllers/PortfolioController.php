<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PortfolioController extends Controller
{
    /**
     * Display the single-page portfolio.
     */
    public function __invoke(): View
    {
        return view('portfolio.index', [
            'portfolio' => config('portfolio'),
        ]);
    }
}
