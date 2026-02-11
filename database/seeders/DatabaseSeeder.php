<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin123'),
        ]);
        // Memanggil TicketSeeder untuk mengisi data tiket dummy
        $this->call(TicketSeeder::class);
    }
}