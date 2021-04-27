<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthenticationController extends Controller
{
    public function callback($provider)
    {
        $userSocial = Socialite::driver($provider)->stateless()->user();
        $user = User::where(['email' => $userSocial->getEmail()])->first();
        if ($user) {
            // TODO-me Update image
            auth()->login($user);
            return redirect()->route('dashboard');
        } else {
            $user = User::create([
                'name' => $userSocial->getName(),
                'email' => $userSocial->getEmail(),
//                'image' => null,
//                'github_image' => $provider == 'github' ? $userSocial->getAvatar() : null,
//                'facebook_image' => $provider == 'facebook' ? $userSocial->getAvatar() : null,
//                'bitbucket_image' => $provider == 'bitbucket' ? $userSocial->getAvatar() : null,
//                'google_image' => $provider == 'google' ? $userSocial->getAvatar() : null,
//                'twitter_image' => $provider == 'twitter' ? $userSocial->getAvatar() : null,
//                'github_provider_id' => $provider == 'github' ? $userSocial->getId() : null,
//                'facebook_provider_id' => $provider == 'facebook' ? $userSocial->getId() : null,
//                'bitbucket_provider_id' => $provider == 'bitbucket' ? $userSocial->getId() : null,
//                'google_provider_id' => $provider == 'google' ? $userSocial->getId() : null,
//                'twitter_provider_id' => $provider == 'twitter' ? $userSocial->getId() : null,
            ]);
            auth()->login($user);
            return redirect()->route('dashboard');
        }
    }

    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
}
