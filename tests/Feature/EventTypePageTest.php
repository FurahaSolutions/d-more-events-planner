<?php

namespace Tests\Feature;

use App\Models\EventType;
use App\Models\User;
use App\Models\Event;
use Illuminate\Support\Str;
use Tests\TestCase;

class EventTypePageTest extends TestCase
{
    /**
     * User should be able to visit event page.
     * GET /events/types/:event-type
     * @group pages
     * @group event-type-page
     * @test
     * @return void
     */
    public function user_can_visit_event_types_page()
    {
        $eventType = EventType::factory()->count(3)->create();
        $response = $this->get('/events/types');
        $response->assertStatus(200);
        $response->assertSeeText(Str::title($eventType[0]->name));
    }

    /**
     * User should be able to visit event page.
     * GET /events/types/:event-type
     * @group pages
     * @group event-type-page
     * @test
     * @return void
     */
    public function user_can_visit_event_type_page()
    {
        $eventType = EventType::factory()->create();
        $response = $this->get('/events/types/'.$eventType->slug);
        $response->assertStatus(200);
        $response->assertSeeText(Str::title($eventType->name));
    }
}
