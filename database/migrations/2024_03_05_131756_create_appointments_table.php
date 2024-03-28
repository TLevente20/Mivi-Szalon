<?php

use App\Models\Service;
use App\Models\User;
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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->nullable();
            $table->foreignIdFor(Service::class);
            $table->string('name')->nullable();
            $table->string('dog_name')->nullable();
            $table->string('dog_type')->nullable();
            $table->string('phone')->nullable();
            $table->dateTime('start_time', $precision = 0);
            $table->dateTime('end_time', $precision = 0);
            $table->mediumInteger('price')->nullable();
            $table->enum('status', ['ACTIVE','CANCELLED','INTIME','MISSED']);
            $table->dateTime('cancellation_time', $precision = 0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
