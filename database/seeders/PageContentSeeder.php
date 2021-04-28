<?php

namespace Database\Seeders;

use App\Models\PageContent;
use Illuminate\Database\Seeder;

class PageContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PageContent::factory()->aboutUs()->state([
            'content' => 'D\'more Event Planner is an Event Planning Software is cutting-edge tool which will allow the client all the resources and visual aids for their event planning. They will be able to play with decoration themes, listen to theme music, design invitations, thank-you cards, and RSVP cards, use the interactive planning calendar, and much more. This software will bring your event into the millennium with cutting edge technology that is designed to save time and money.'
        ])->create();
        PageContent::factory()->aboutUs()->state([
            'content' => 'We also provide a Step-by-Step Guide in preparation to your event which include a calendar to map out the event, a step-by-step guide on what is needed for and how to put together a successful, worry-free event, resource information, popular refreshments with recipes, games, and tips to put their event in the record books. The events available include birthdays for all ages, meetings, retreats, parties, vacations, and special occasion celebrations such as graduations, holidays, showers, weddings, and receptions.'
        ])->create();
    }
}
