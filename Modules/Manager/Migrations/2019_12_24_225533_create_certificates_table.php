<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('manager_id');
            $table->string('token_id');
            $table->string('email');
            $table->string('phone_number');
            $table->string('amount');
            $table->string('policy_name');
            $table->string('certificate_number');
            $table->string('policy_number');
            $table->string('index_mark');
            $table->string('plate_number');
            $table->string('chassis_number');
            $table->string('make_of_vehicle');
            $table->string('name_of_policy_holder');
            $table->string('registration_date');
            $table->string('expiring_date');
            $table->string('type_of_cover');
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
        Schema::dropIfExists('certificates');
    }
}
