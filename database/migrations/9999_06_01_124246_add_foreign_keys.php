<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employee_task',function(Blueprint $table){
            $table  -> foreign('task_id','employee_task')
                    -> references('id')
                    -> on('tasks');
            $table  -> foreign('employee_id','task_employee')
                    -> references('id')
                    -> on('employees');
        });
        Schema::table('employees',function(Blueprint $table){
            $table  -> foreign('location_id', 'location')
                    -> references('id')
                    -> on('locations');
            $table  -> foreign('contract_id', 'contract')
                    -> references('id')
                    -> on('contracts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employee_task', function(Blueprint $table){
            $table->dropForeign('employee_task');
            $table->dropForeign('task_employee');
        });
        Schema::table('employees', function(Blueprint $table){
            $table->dropForeign('location');
            $table->dropForeign('contract');
        });
    }
}
