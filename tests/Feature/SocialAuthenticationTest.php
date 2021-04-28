<?php

namespace Tests\Feature;

use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Mockery;
use Tests\TestCase;

class SocialAuthenticationTest extends TestCase
{
    /**
     * A basic feature test example
     * @group auth
     * @test
     * @return void
     */
    public function user_should_be_redirected_to_social_login_page() {
        $this->get('/auth/redirect/google')
            ->assertStatus(302);
    }
    /**
     * A basic feature test example
     * @group auth
     * @test
     * @return void
     */
    public function user_can_login_using_google_account()
    {
        $providerName = 'google';
        $socialAccount = User::factory()->create(['provider' => $providerName]);
        $abstractUser = Mockery::mock('Laravel\Socialite\Two\User');
        $abstractUser->shouldReceive('getId')
            ->andReturn($socialAccount->provider_user_id)
            ->shouldReceive('getEmail')
            ->andReturn($this->faker->email)
            ->shouldReceive('getName')
            ->andReturn($this->faker->name)
            ->shouldReceive('getAvatar')
            ->andReturn('https://en.gravatar.com/userimage');

        $provider = Mockery::mock('Laravel\Socialite\Contracts\Provider');
        $provider->shouldReceive('user')->andReturn($abstractUser);
        $provider->shouldReceive('stateless->user')
            ->andReturn($abstractUser);

        Socialite::shouldReceive('driver')->with('google')->andReturn($provider);
        $this->get('/auth/callback/google')
            ->assertStatus(302);
    }

    /**
     * A basic feature test example
     * @group auth
     * @test
     * @return void
     */
    public function user_can_login_using_facebook_account()
    {
        $providerName = 'google';
        $socialAccount = User::factory()->create(['provider' => $providerName]);
        $abstractUser = Mockery::mock('Laravel\Socialite\Two\User');
        $abstractUser->shouldReceive('getId')
            ->andReturn($socialAccount->provider_user_id)
            ->shouldReceive('getEmail')
            ->andReturn($this->faker->email)
            ->shouldReceive('getName')
            ->andReturn($this->faker->name)
            ->shouldReceive('getAvatar')
            ->andReturn('https://en.gravatar.com/userimage');

        $provider = Mockery::mock('Laravel\Socialite\Contracts\Provider');
        $provider->shouldReceive('user')->andReturn($abstractUser);
        $provider->shouldReceive('stateless->user')
            ->andReturn($abstractUser);

        Socialite::shouldReceive('driver')->with('facebook')->andReturn($provider);
        $this->get('/auth/callback/facebook')
            ->assertStatus(302);
    }

    /**
     * A basic feature test example
     * @group auth
     * @test
     * @return void
     */
    public function user_can_login_using_twitter_account()
    {
        $providerName = 'google';
        $socialAccount = User::factory()->create(['provider' => $providerName]);
        $abstractUser = Mockery::mock('Laravel\Socialite\Two\User');
        $abstractUser->shouldReceive('getId')
            ->andReturn($socialAccount->provider_user_id)
            ->shouldReceive('getEmail')
            ->andReturn($this->faker->email)
            ->shouldReceive('getName')
            ->andReturn($this->faker->name)
            ->shouldReceive('getAvatar')
            ->andReturn('https://en.gravatar.com/userimage');

        $provider = Mockery::mock('Laravel\Socialite\Contracts\Provider');
        $provider->shouldReceive('user')->andReturn($abstractUser);
        $provider->shouldReceive('stateless->user')
            ->andReturn($abstractUser);

        Socialite::shouldReceive('driver')->with('twitter')->andReturn($provider);
        $this->get('/auth/callback/twitter')
            ->assertStatus(302);
    }
}
