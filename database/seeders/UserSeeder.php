<?php

namespace Database\Seeders;


use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory(6)->create()->each(function ($user) {
            $user->profile()->save(Profile::factory()->make());
        });
    }
}
