<?php

namespace Tests\Feature;

use Tests\TestCase;

class PortfolioTest extends TestCase
{
    public function test_portfolio_page_renders(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertViewIs('portfolio.index')
            ->assertSee('Hi I&#039;m Rakan,', false)
            ->assertSee('Backend Developer')
            ->assertSee('Selected Works')
            ->assertSee('rakanosama.dev@gmail.com');
    }

    public function test_portfolio_page_lists_experience_and_projects(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('Extreme Energy')
            ->assertSee('Hossam X Studios')
            ->assertSee('New Solution')
            ->assertSee('Green Harvest')
            ->assertSee('Damietta University');
    }

    public function test_portfolio_page_links_to_social_profiles(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('https://github.com/Rakan-osama')
            ->assertSee('https://www.linkedin.com/in/rakan-osama')
            ->assertSee('https://wa.me/201010556064');
    }
}
