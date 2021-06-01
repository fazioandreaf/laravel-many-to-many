<?php

use Illuminate\Database\Seeder;
use App\Contract;

class ContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Contract::class,50)->create();
    }
}
