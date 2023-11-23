<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Customer;
use App\Models\User;
use Cassandra\Custom;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create(['name' => 'Pet Boss', 'is_owner' => true]);
        User::factory()->create(['name' => 'Cat Seller']);
        User::factory()->create(['name' => 'Dog Seller']);

        User::all()->each(function ($user) {
            $user->customer()->createMany(Customer::factory(25)->make()->toArray());
        });
    }
}
