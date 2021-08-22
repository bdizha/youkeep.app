<?php

use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Database\Seeder;

class EmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'someone@somewhere.com')->first();

        event(new Registered($user));
    }
}
