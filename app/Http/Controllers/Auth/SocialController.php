<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

/**
 * Class SocialController
 * @package App\Http\Controllers\Auth
 */
class SocialController extends BaseController
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $githubUser = Socialite::driver('github')->user();
        $user = User::where('provider_id', $githubUser->getId())->first();
        if (!$user) {
            // add user to database
            $user = User::create([
                'email' => $githubUser->getEmail(),
                'name' => $githubUser->getName(),
                'provider_id' => $githubUser->getId(),
                'role_id' => 1,
            ]);
        }
        // login the userredirectTo
        Auth::login($user, true);
        return redirect()->route('admin.index');
    }
}
