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
        User::create([
            'name' => 'Hüseyin',
            'email' => 'huseyin@erbayat.com',
            'password' => bcrypt('12345678'),
        ]);

        User::factory(100)->create();
    }
}
