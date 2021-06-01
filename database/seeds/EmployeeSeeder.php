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
        factory(Employee::class,500)->make()->each(function($employee){
            $location=Location::inRandomOrder()->first();
            $contract=Contract::inRandomOrder()->first();
            $employee->contract_id=$contract->id;
            $employee->location_id=$location->id;
            $employee->save();
        });
    }
}
