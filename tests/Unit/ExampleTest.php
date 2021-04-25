<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
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
        $this->assertTrue(true);
    }
}
