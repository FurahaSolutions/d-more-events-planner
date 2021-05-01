<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class DashboardPageTest extends TestCase
{
    /**
     *
     * GET /
     * @group pages
     * @group dashboard-page
     * @test
     * @return void
     */
    public function unauthenticated_user_is_redirected_to_login_page_on_visiting_dashboard()
    {
        $response = $this->get('/dashboard');
        $response->assertStatus(302);
    }

    /**
     *
     * GET /
     * @group pages
     * @group dashboard-page
     * @test
     * @return void
     */
    public function authenticated_user_can_visit_dashboard_dashboard()
    {
        $response = $this->actingAs(User::factory()->create())
            ->get('/dashboard');
        $response->assertStatus(200);
    }
}
