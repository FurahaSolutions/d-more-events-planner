<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('image')->nullable();
            $table->string('provider')->nullable();
//            $table->string('google_image')->nullable();
//            $table->string('bitbucket_image')->nullable();
//            $table->string('facebook_image')->nullable();
//            $table->string('twitter_image')->nullable();
//            $table->string('github_image')->nullable();
//            $table->string('google_provider_id')->nullable();
//            $table->string('bitbucket_provider_id')->nullable();
//            $table->string('facebook_provider_id')->nullable();
//            $table->string('twitter_provider_id')->nullable();
//            $table->string('github_provider_id')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
