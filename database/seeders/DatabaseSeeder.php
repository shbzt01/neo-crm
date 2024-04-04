<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserInfo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Create first admin user
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);

        // Create related UserInfo
        UserInfo::create([
            'user_id' => $user->id,
            'address' => '123 Admin St.',
            'role' => 'Admin',
            'phone' => '123-456-7890'
        ]);
    }
}
