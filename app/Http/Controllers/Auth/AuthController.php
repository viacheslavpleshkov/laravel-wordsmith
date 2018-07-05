<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App;
use App\User;
use App\Role;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    /**
     * Redirect the user to the $provider authentication page.
     *
     * @return Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from $provider.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();
        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
        return redirect()->route('admin.index');
    }

    /**
     * If a user has registered before using social auth, return the user
     * else, create a new user object.
     * @param  $user Socialite user object
     * @param $provider Social auth provider
     * @return  User
     */
    public function findOrCreateUser($user, $provider)
    {
        switch ($provider) {
            case 'github';
                $authUser = User::where('github_id', $user->id)->first();
                break;
            case 'google';
                $authUser = User::where('google_id', $user->id)->first();
                break;
            case 'facebook';
                $authUser = User::where('facebook_id', $user->id)->first();
                break;
            case 'twitter';
                $authUser = User::where('twitter_id', $user->id)->first();
                break;
        }
        if ($authUser) {
            return $authUser;
        }
        $role = Role::where('name', 'User')->first();
        switch ($provider) {
            case 'github';
                return User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'github_id' => $user->id,
                    'role_id' => $role->id
                ]);
                break;
            case 'google';
                return User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'role_id' => $role->id
                ]);
                break;
            case 'facebook';
                return User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'facebook_id' => $user->id,
                    'role_id' => $role->id
                ]);
                break;
            case 'twitter';
                return User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'twitter_id' => $user->id,
                    'role_id' => $role->id
                ]);
                break;
        }
    }
}