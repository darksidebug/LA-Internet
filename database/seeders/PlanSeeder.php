<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plan::create([
            'name'=>'Plan 5',
            'sogod_rate'=>600,
            'outside_sogod_rate'=>800
        ]);

        Plan::create([
            'name'=>'Plan 10',
            'sogod_rate'=>1200,
            'outside_sogod_rate'=>1600
        ]);

        Plan::create([
            'name'=>'Plan 15',
            'sogod_rate'=>1800,
            'outside_sogod_rate'=>2400
        ]);

        Plan::create([
            'name'=>'Plan 20',
            'sogod_rate'=>2400,
            'outside_sogod_rate'=>3200
        ]);
    }
}
