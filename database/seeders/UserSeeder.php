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
        collect([
            [
                'name' => 'nama',
                'email' => 'nama@gmail.com',
                'password' => bcrypt('password'),
            ]
        ])->each(function ($data) {
            User::create($data);
        });
    }
}
