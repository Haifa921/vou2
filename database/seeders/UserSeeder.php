<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'is_admin' => true,
            'email'=>'admin@example.com'
        ]);

        User::factory()
            ->count(4)
            ->state(new Sequence(
                ['type' => 'supervisor'],
                ['type' => 'volunteer'],
            ))
            ->create();
    }
}
