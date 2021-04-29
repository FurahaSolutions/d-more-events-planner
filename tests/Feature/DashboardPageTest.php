<?php

namespace Tests\Feature;

use Tests\TestCase;

class ContactPageTest extends TestCase
{
    /**
     * User should be able to visit contact page.
     * GET /
     * @group pages
     * @group contact-page
     * @test
     * @return void
     */
    public function user_can_visit_contact_page()
    {
        $response = $this->get('/contact');
        $response->assertStatus(200);
        $response->assertSeeText('Contact');
    }
}
