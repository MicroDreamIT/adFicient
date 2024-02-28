<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');
            $table->string('city');
            $table->string('country');

            //cant marry before 18
            $table->date('date_of_birth');
            $table->boolean('is_married')->default(false);

            //- If Yes, the following fields show up conditionally:
            $table->date('date_of_marriage')->nullable();

            //- If No, the following fields show up conditionally:
            $table->boolean('is_widowed')->default(false);
            $table->boolean('is_past_marriage')->default(false);

            $table->string('country_of_marriage');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
