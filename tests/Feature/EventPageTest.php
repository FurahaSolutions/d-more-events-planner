<?php

namespace Tests\Feature;

use Tests\TestCase;

class EventPageTest extends TestCase
{
    /**
     * User should be able to visit landing page.
     * GET /events/:event
     * @group pages
     * @group home-page
     * @test
     * @return void
     */
    public function user_can_visit_landing_page()
    {
        $response = $this->get('/events/weddings');
        $response->assertStatus(200);
        $response->assertSeeText('weddings');
    }
}
