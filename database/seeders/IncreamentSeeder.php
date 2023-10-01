<?php

namespace Database\Seeders;

use App\Models\Increament;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IncreamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Increament::create([
            'company_id' => mt_rand(1,50),
            'employee_id' => mt_rand(4,200),
            'department_id' => mt_rand(1,6),
            'percent' =>mt_rand(1,20),
            'inc_date'=> Carbon::create('2000', '01', '01')

        ]);

//        Increament::factory()
//            ->count(20)
//            ->create();






    }
}
