<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
        \App\Models\typeuser::factory(10)->create();
        \App\Models\user::factory(10)->create();
        \App\Models\spec::factory(10)->create();
        \App\Models\fishbowl::factory(10)->create();
        \App\Models\register::factory(10)->create();
        \App\Models\kind::factory(10)->create();
        \App\Models\sex::factory(10)->create();
        \App\Models\diet::factory(10)->create();
        \App\Models\product::factory(10)->create();
        \App\Models\food::factory(10)->create();
        \App\Models\fish::factory(10)->create();
        \App\Models\file::factory(10)->create();
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
