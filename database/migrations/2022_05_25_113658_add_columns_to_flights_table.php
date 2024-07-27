<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('flights', function (Blueprint $table) {
            $table->string('Departure_date',20);
            $table->string('Return_date',20)->nullable();
            $table->string('flights_No',10);
            $table->string('User_name',100)->after('id');
            $table->string('User_Email',100)->after('User_name');
            $table->string('fname',100)->after('User_Email');
            $table->string('lname',100)->after('fname');
            $table->string('Contact',100)->after('flights_No');
            $table->string('DOB',15)->after('Contact');
            $table->string('price',100)->after('DOB');
            $table->string('Takeoff_Time',15)->after('Departure_date');
            $table->string('Arival_Time',15)->after('Takeoff_Time');
            $table->string('Ret_Takeoff_Time',15)->after('Departure_date')->nullable();;
            $table->string('Ret_land_Time',15)->after('Takeoff_Time')->nullable();




            // php artisan make:migration add_columns_to_flights_table
            


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('flights', function (Blueprint $table) {
            //
        });
    }
}
