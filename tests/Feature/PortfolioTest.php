<?php

namespace Tests\Feature;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class PortfolioTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutVite();
    }

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
            ->assertSee('src="'.asset('img/logo_of_companies/extreme_energy.jpeg').'"', false)
            ->assertSee('src="'.asset('img/ESG_Report/imag.jpeg').'"', false)
            ->assertSee('src="'.asset(config('portfolio.profile.portrait')).'"', false);
    }

    #[DataProvider('projectProvider')]
    public function test_project_page_renders_supplied_project_details(string $slug, string $name, string $image): void
    {
        $response = $this->get(route('projects.show', $slug));

        $response
            ->assertOk()
            ->assertSee($name)
            ->assertSee('Project overview')
            ->assertSee('Production interface')
            ->assertSee('src="'.asset($image).'"', false);
    }

    public function test_unknown_project_returns_not_found(): void
    {
        $response = $this->get('/projects/not-a-real-project');

        $response->assertNotFound();
    }

    /**
     * @return array<string, array{string, string, string}>
     */
    public static function projectProvider(): array
    {
        return [
            'esg reporting module' => ['esg-reporting-module', 'ESG Reporting Module', 'img/ESG_Report/imag.jpeg'],
            'roaya real estate' => ['roaya-realestate', 'Roaya Real Estate', 'img/Roaya_realestate/001-home-03-projects.webp'],
            'hossam x studios' => ['hossam-x-studios', 'Hossam X Studios', 'img/hossam_x_studios/hero_secction.png'],
            'green harvest' => ['green-harvest', 'Green Harvest', 'img/green_harvest/001-home.webp'],
            'biry suits' => ['biry-suits', 'Biry Suits', 'img/biry_suits/01-admin-dashboard.webp'],
            'green hills club' => ['green-hills-club', 'Green Hills Club', 'img/green_hills/001-home.webp'],
        ];
    }
}
