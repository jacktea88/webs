<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Eloquent;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Eloquent::unguard();
        // DB::statement('SET FOREIGN_KEY_CHECKS=0');
        // $this->call([CategorySeeder::class]);
        // DB::statement('SET FOREIGN_KEY_CHECKS=1');
        // Eloquent::reguard();

        Eloquent::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $this->call([CategorySeeder::class,PostSeeder::class]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        Eloquent::reguard();
    }
}
