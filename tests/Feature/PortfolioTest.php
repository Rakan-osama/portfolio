<?php

namespace Tests\Feature;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class PortfolioTest extends TestCase
{
    public function test_homepage_renders_portfolio_content_and_contact_links(): void
    {
        $response = $this->get('/');

        $response
            ->assertOk()
            ->assertSee('Rakan Osama')
            ->assertSee('Full-stack Developer')
            ->assertSee('Extreme Energy')
            ->assertSee('rakanosama.dev@gmail.com')
            ->assertSee('https://www.linkedin.com/in/rakan-osama', false)
            ->assertSee('src="'.asset(config('portfolio.profile.portrait')).'"', false);
    }

    #[DataProvider('projectProvider')]
    public function test_project_page_renders_supplied_project_details(string $slug, string $name): void
    {
        $response = $this->get(route('projects.show', $slug));

        $response
            ->assertOk()
            ->assertSee($name)
            ->assertSee('Project overview');
    }

    public function test_unknown_project_returns_not_found(): void
    {
        $response = $this->get('/projects/not-a-real-project');

        $response->assertNotFound();
    }

    /**
     * @return array<string, array{string, string}>
     */
    public static function projectProvider(): array
    {
        return [
            'esg reporting module' => ['esg-reporting-module', 'ESG Reporting Module'],
            'roaya real estate' => ['roaya-realestate', 'Roaya Real Estate'],
            'hossam x studios' => ['hossam-x-studios', 'Hossam X Studios'],
            'green harvest' => ['green-harvest', 'Green Harvest'],
            'biry suits' => ['biry-suits', 'Biry Suits'],
            'green hills club' => ['green-hills-club', 'Green Hills Club'],
        ];
    }
}
