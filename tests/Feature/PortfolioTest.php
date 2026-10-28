<?php

namespace Tests\Feature;

use App\Models\ContactMessage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PortfolioTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_page_renders_portfolio_content(): void
    {
        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertSee(config('portfolio.name'));
        $response->assertSee('Selected work');
        $response->assertSee('Extreme Energy');
        $response->assertSee('Damietta University');
    }

    public function test_contact_message_can_be_submitted(): void
    {
        $payload = ContactMessage::factory()->make()->toArray();

        $response = $this->post(route('contact.store'), $payload);

        $response->assertRedirect(route('home') . '#contact');
        $response->assertSessionHas('status');
        $this->assertDatabaseHas('contact_messages', [
            'name' => $payload['name'],
            'email' => $payload['email'],
        ]);
    }

    public function test_contact_message_requires_valid_data(): void
    {
        $response = $this->post(route('contact.store'), []);

        $response->assertSessionHasErrors(['name', 'email', 'message']);
        $this->assertDatabaseCount('contact_messages', 0);
    }
}
