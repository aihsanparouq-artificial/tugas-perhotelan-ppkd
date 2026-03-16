<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('guests', function (Blueprint $table) {
            $table->id();

            $table->string('room_no')->nullable();
            $table->integer('no_of_person')->nullable();
            $table->integer('no_of_room')->nullable();
            $table->string('room_type')->nullable();

            $table->string('receptionist')->nullable();
            $table->time('checkout_time')->nullable();

            $table->string('name');
            $table->string('profession')->nullable();
            $table->string('company')->nullable();
            $table->string('nationality')->nullable();

            $table->string('passport_no')->nullable();
            $table->date('birth_date')->nullable();

            $table->text('address');

            $table->string('email');
            $table->string('phone');

            $table->time('arrival_time');
            $table->date('arrival_date');
            $table->date('departure_date');

            $table->string('issued_by');
            $table->date('date_of_book');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guests');
    }
};
