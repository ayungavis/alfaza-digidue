<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('month_id');
            $table->string('year');
            $table->bigInteger('location_id');
            $table->text('desc_job')->nullable();
            $table->string('voltage');
            $table->bigInteger('bay_type_id');
            $table->bigInteger('equipment_out_id');
            $table->string('attribute')->nullable();
            $table->string('person_responsibles')->nullable();
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->time('start_hours');
            $table->time('end_hours');
            $table->text('note');
            $table->string('notif');
            $table->integer('approve_id');
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
        Schema::dropIfExists('schedules');
    }
}
