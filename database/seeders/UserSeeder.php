<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Shodmehr',
            'phone' => '005335051',
            'avatar' => 'default.png',
            'role' => 'admin',
            'password' => Hash::make('Shod63mm'),
        ]);
    }
}
