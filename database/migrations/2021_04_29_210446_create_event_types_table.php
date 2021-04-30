<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateEventTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_types', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('name');
            $table->timestamps();
        });

        DB::table('event_types')->insert([
            ['name' => 'Childs Day Out', 'slug' => 'child-day-out'],
            ['name' => 'Conference, Seminars and workshops', 'slug' => 'conference'],
            ['name' => 'Corporate Retreat & Team Building', 'slug' => 'corporate-retreat'],
            ['name' => 'Dinner Galas and End Year Party', 'slug' => 'end-of-year-party'],
            ['name' => 'Fund Raising', 'slug' => 'fund-raising'],
            ['name' => 'Graduation', 'slug' => 'graduation'],
            ['name' => 'Party Packs', 'slug' => 'party-packs'],
            ['name' => 'Product Launches', 'slug' => 'product-launches'],
            ['name' => 'Reunions', 'slug' => 'reunions'],
            ['name' => 'Trade Shows', 'slug' => 'trade-shows'],
            ['name' => 'Weddings', 'slug' => 'weddings']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_types');
    }
}
