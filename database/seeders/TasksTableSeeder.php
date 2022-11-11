<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;
class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::create(['task_name' => 'ワクチン接種', 'done' => 1, 'year' => 2022, 'month' => 10, 'day' => 12, 'period' => 7, 'memo'  => '可及的速やかに']);
    }
}
