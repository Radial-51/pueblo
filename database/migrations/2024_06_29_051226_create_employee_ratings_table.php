<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_ratings', function (Blueprint $table) {
            $table->id();
            $table->integer('service_employee_id');
            $table->integer('counter_employee_id');
            $table->integer('customer_id');
            $table->integer('service_rating');
            $table->integer('counter_rating');
            $table->text('service_feedback')->nullable();
            $table->text('counter_feedback')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_ratings');
    }
}
