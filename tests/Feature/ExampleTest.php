<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\LazilyRefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use LazilyRefreshDatabase;

    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_if_user_can_visit_homepage(): void
    {
        $sampleUser = User::factory()->create();
        $response = $this->actingAs($sampleUser)->get('/');
        $response->assertStatus(200);
    }
}
