<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\todos;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        todos::create([
            'name'      => 'Cristhyan',
        ]);
    }
}
