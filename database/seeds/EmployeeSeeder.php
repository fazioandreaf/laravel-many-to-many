<?php

use Illuminate\Database\Seeder;
use App\Employee;
use App\Location;
use App\Task;
use App\Contract;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(location::class,500)->make()->each(fuction($employee){
            $location=Location::inRandomOrder()->first();
            $employee->location_id=$location->id;
            $employee->save();
        });
    }
}
