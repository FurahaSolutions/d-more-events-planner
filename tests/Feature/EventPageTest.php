<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Event;
use Tests\TestCase;

class EventPageTest extends TestCase
{
    /**
     * User should be able to visit events page.
     * GET /events
     * @group pages
     * @group events-page
     * @test
     * @return void
     */
    public function user_can_visit_events_page()
    {
        $response = $this->get('/events');
        echo $response->content();
        $response->assertStatus(200);
        $response->assertSeeText('Events');
    }

    /**
     * User should be able to visit create event page.
     * GET /events/create
     * @group pages
     * @group events-page
     * @test
     * @return void
     */
    public function user_can_visit_create_event_page()
    {
        $response = $this->get('/events/create');
        $response->assertStatus(200);
        $response->assertSeeText('Name');
    }

    /**
     * User should be able to create event page.
     * POST /events
     * @group pages
     * @group events-page
     * @test
     * @return void
     */
    public function unauthenticated_user_cannot_create_event_page()
    {
        $user = User::factory()->create();
        $event = Event::factory()->make()->toArray();
        $response = $this->post('/events', $event);
        $response->assertStatus(403);
    }

    /**
     * User should be able to create event page.
     * POST /events
     * @group pages
     * @group events-page
     * @test
     * @return void
     */
    public function user_can_create_event()
    {
        $user = User::factory()->create();
        $event = Event::factory()->make()->toArray();
        $response = $this->actingAs($user)->post('/events', $event);
        $response->assertStatus(302);
        $this->assertNotNull(Event::where('name', $event['name'])->first());
    }

    /**
     * User should be able to create event page.
     * POST /events
     * @group pages
     * @group events-page
     * @test
     * @return void
     */
    public function user_receives_error_422_if_name_is_not_provided()
    {
        $user = User::factory()->create();
        $event = Event::factory()->state(['name' => ''])->make()->toArray();
        $response = $this->actingAs($user)->postJson('/events', $event);
        $response->assertStatus(422);
    }

    /**
     * User should be able to create event page.
     * POST /events
     * @group pages
     * @group events-page
     * @test
     * @return void
     */
    public function user_receives_error_422_if_event_type_is_not_provided()
    {
        $user = User::factory()->create();
        $event = Event::factory()->state(['event_type_id' => ''])->make()->toArray();
        $response = $this->actingAs($user)->postJson('/events', $event);
        $response->assertStatus(422);
    }
}
