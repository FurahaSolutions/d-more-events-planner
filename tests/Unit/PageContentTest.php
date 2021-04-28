<?php

namespace Tests\Unit;

use App\Http\Controllers\PageContentController;
use App\Models\PageContent;
use Database\Seeders\DatabaseSeeder;
use Database\Seeders\PageContentSeeder;
use Tests\TestCase;

class PageContentTest extends TestCase
{

    protected function setUp(): void
    {
        parent::setUp();
        app(DatabaseSeeder::class)->call(PageContentSeeder::class);
    }
    /**
     * A basic unit test example.
     * @test
     * @group page-content
     * @return void
     */
    public function retrieve_about_us_info()
    {
        $this->assertNotNull(PageContent::aboutUs());
    }
}
