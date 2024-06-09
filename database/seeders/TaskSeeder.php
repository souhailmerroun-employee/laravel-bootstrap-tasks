<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;
use App\Models\User;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // loop through random 10 users and create number tasks for each user up to 5
        User::inRandomOrder()->limit(10)->get()->each(function (User $user) {
            Task::factory(random_int(1, 5))->create([
                'user_id' => $user->id,
            ]);
        });
    }
}
