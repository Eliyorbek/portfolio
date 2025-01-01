<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        App::setLocale(session('locale'));
        User::create([
            'name' => 'Eliyorbek',
            'email' => 'eltosoft@gmail.com',
            'password' => Hash::make('eltosoft'),
        ]);
    }
}
