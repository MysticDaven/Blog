<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();

        $user->name = 'David Avila';
        $user->email = 'eldaven@codersfree.com';
        $user->password = bcrypt('123');

        $user->save();
        
        $user = new User();
        $user->name = 'Randy Caramelo';
        $user->email = 'larandy@codersfree.com';
        $user->password = bcrypt('123');

        $user->save();

        User::factory(10)->create();
    }
}
