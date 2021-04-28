<?php

namespace Tests\Feature;

use Tests\TestCase;

class AboutPageTest extends TestCase
{
    /**
     * User should be able to visit landing page.
     * GET /
     * @group pages
     * @group about-page
     * @test
     * @return void
     */
    public function user_can_visit_about_page()
    {
        $response = $this->get('/about');
        $response->assertStatus(200);
        $response->assertSeeText('About');
    }
}
