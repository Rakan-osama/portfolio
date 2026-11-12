<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PortfolioController extends Controller
{
    public function index(): View
    {
        return view('portfolio.index', [
            'portfolio' => config('portfolio'),
        ]);
    }

    public function show(string $project): View
    {
        $projects = collect(config('portfolio.projects'));
        $selectedProject = $projects->firstWhere('slug', $project);

        abort_if($selectedProject === null, 404);

        $projectIndex = $projects->search(fn (array $item): bool => $item['slug'] === $project);
        $nextProject = $projects->get(($projectIndex + 1) % $projects->count());

        return view('portfolio.project', [
            'portfolio' => config('portfolio'),
            'project' => $selectedProject,
            'nextProject' => $nextProject,
        ]);
    }
}
