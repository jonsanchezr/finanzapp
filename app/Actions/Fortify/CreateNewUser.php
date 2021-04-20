<?php

namespace App\Actions\Fortify;

use App\Models\Team;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
        ])->validate();

        return DB::transaction(function () use ($input) {
            return tap(User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
            ]), function (User $user) use ($input) {
                $this->createTeam($user);
                $this->assignRole($user, $input['role']);
                $this->createProfile($user, $input);
            });
        });
    }

    /**
     * Create a personal team for the user.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    protected function createTeam(User $user)
    {
        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => explode(' ', $user->name, 2)[0]."'s Team",
            'personal_team' => true,
        ]));
    }

    /**
     * Assign a role for the user.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    protected function assignRole(User $user, $role)
    {
        $user->assignRole($role);
    }

    /**
     * Create a profile for the user.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    protected function createProfile(User $user, $request)
    {
        $profile = new Profile;
        $profile->name = $request['name'];
        $profile->lastname = $request['lastname']; 
        $profile->username = $request['username']; 
        $profile->position = $request['position']; 
        $profile->mail = $request['email'];
        $profile->phone = $request['phone']; 
        $profile->country = $request['country'];
        $profile->state = $request['state']; 
        $profile->city = $request['city']; 
        $profile->address = $request['address'];
        $profile->start_date = $request['start_date'];

        $user->profile()->save($profile);
    }
}
