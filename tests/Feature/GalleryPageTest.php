<?php

namespace Tests\Feature;

use Tests\TestCase;

class GalleryPageTest extends TestCase
{
    /**
     * User should be able to visit landing page.
     * GET /
     * @group pages
     * @group home-page
     * @test
     * @return void
     */
    public function user_can_visit_landing_page()
    {
        $response = $this->get('/gallery');
        $response->assertStatus(200);
        $response->assertSeeText('Photo');
    }
}
